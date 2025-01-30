<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('dashboard');
    }

    /**
     * Autentica como outro usuário
     *
     * @param User $user
     * @return RedirectResponse
     */
    public function acessarComo(User $user): RedirectResponse
    {
        Auth::guard('web')->login($user);

        return redirect()->route('dashboard');
    }
}
