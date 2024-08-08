<?php

namespace App\Services\Auth;

class LogoutService
{
    public function run():string
    {
        $user = auth()->user();

        return "Logout sucessfull";
    }
}
