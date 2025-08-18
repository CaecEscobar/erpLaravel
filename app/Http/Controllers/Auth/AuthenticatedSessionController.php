<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
   public function store(LoginRequest $request): Response
    {
        // 1) Verificar reCAPTCHA antes de autenticar
        $token = $request->input('recaptcha') ?? $request->input('g-recaptcha-response');

        $resp = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => config('services.recaptcha.secret'),
            'response' => (string) $token,
            'remoteip' => $request->ip(),
        ]);

        if (! data_get($resp->json(), 'success')) {
            // Lanza error de validación en el campo 'recaptcha' (422)
            throw ValidationException::withMessages([
                'recaptcha' => 'Captcha inválido.',
            ]);
        }

        // 2) Autenticar normalmente
        $request->authenticate();
        $request->session()->regenerate();

        return response()->noContent();
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): Response
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->noContent();
    }
}
