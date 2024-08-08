<?php

namespace App\Services\User;

class DeleteUserService
{
    public function run(object $user)
    {

       $user->delete();

        return 'The user was deleted';
    }
}
