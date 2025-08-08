<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class ReportController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user()->load('role');
        logger($user);
        if ($user->role->id === 1 || $user->role->id === 2) {
            return Report::with('user')->get();
        }

        return Report::with('user')->where('vendor_number', $user->vendor_number)->get();
    }
}