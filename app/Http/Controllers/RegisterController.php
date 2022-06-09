<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    private AuthService $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function register()
    {
        return response()->view('auth.register');
    }

    public function cekRegister(RegisterRequest $registerRequest)
    {
        if($this->authService->cekRegister($registerRequest)) {
            return redirect()->route('user.login')->with('status', 'Register Berhasil');
        }

        return redirect()->back()->withErrors(['register' => 'Register Gagal']);
    }
}
