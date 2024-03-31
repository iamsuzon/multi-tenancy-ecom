<?php

declare(strict_types=1);

namespace App\Http\Controllers\Landlord\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\EnsureAuth;
use App\Http\Middleware\RedirectIfUnauthenticated;
use App\Http\Requests\LandlordAuthRequest;
use App\Http\Services\Landlord\LandlordUserAuthService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(EnsureAuth::class, only: ['showRegisterForm', 'showLoginForm']),
            new Middleware(RedirectIfUnauthenticated::class, only: ['logout']),
        ];
    }

    public function showLoginForm()
    {
        return view('landlord.auth.login');
    }

    public function submitLoginForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials))
        {
            $request->session()->regenerate();
            return to_route('landlord.user.dashboard');
        }

        return back()->with(['type' => 'danger', 'msg' => 'Login credentials are incorrect'])->withInput();
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return to_route('landlord.auth.login');
    }
}
