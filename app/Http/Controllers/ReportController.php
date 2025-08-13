<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Report;

class ReportController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user()->load('role');

        if ($user->role->id === 3) {
            return Report::with('user')
                ->where('vendor_number', $user->vendor_number)
                ->latest('created_at')
                ->take(1)
                ->get();
        }

        $latestPerVendor = Report::select('vendor_number', DB::raw('MAX(created_at) as max_created_at'))
            ->groupBy('vendor_number');

        return Report::with('user')
            ->joinSub($latestPerVendor, 'latest', function ($join) {
                $join->on('reports.vendor_number', '=', 'latest.vendor_number')
                    ->on('reports.created_at', '=', 'latest.max_created_at');
            })
            ->orderByDesc('reports.created_at')
            ->get();
    }
}