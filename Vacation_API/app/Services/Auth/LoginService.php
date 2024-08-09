<?php

namespace App\Services\Auth;

use App\Models\User;

class LoginService
{
    public function run(array $data): string | null{
        if(auth()->attempt($data)){
            $user = User::where('email', $data['email'])
                ->first();
            return $user->createToken('token')->plainTextToken;
        }

        return null;
    }
}
