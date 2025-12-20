<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Module;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if (! $user->hasCustomizedModules()) {
            return redirect()->route('onboarding');
        }

        return view('dashboard.index', [
            'modules' => $user->modules
        ]);
    }
}
