<?php

namespace app\Services\Auth;

class LogoutService
{
    public function run():string
    {
        $user = auth()->user();

        $user->tokens()->delete();

        if(!$user->tokens()){

            return "The user was not looged out, please try again";
        }
        return "Logout Sucessfull";
    }
}
