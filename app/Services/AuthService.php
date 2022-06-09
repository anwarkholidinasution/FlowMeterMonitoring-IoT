<?php

namespace App\Services;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Auth\LoginController;

class AuthService {

    public function cekLogin(LoginRequest $loginRequest): bool
    {
        $validateData = $loginRequest->validated();

        return Auth::attempt($validateData);
    }

    public function cekRegister(RegisterRequest $registerRequest): bool
    {
        $registerValidated = $registerRequest->validated();
        $registerValidated['password'] = Hash::make($registerRequest->password);

        try {
            DB::beginTransaction();

            User::create($registerValidated);

            DB::commit();

            return true;

        } catch(Exception $error) {
            DB::rollBack();

            return false;
        }
    }

}

?>
