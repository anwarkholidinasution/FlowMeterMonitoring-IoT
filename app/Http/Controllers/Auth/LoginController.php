<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login()
    {
        return response()->view('auth.login');
    }

    public function cekLogin(LoginRequest $loginRequest)
    {
        if($this->authService->cekLogin($loginRequest)) {
            $loginRequest->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()
        ->withErrors(['login' => 'Email atau Password Anda Salah'])
        ->onlyInput('email');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('user.login');
    }
}
