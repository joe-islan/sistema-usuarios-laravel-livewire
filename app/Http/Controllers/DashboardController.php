<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function acessarComo($id)
    {
        $user = User::findOrFail($id);

        Auth::guard('web')->login($user);

        return redirect()->route('dashboard');
    }
}
