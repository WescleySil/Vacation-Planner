<?php

namespace App\Services\User;

use Illuminate\Support\Facades\Hash;

class UpdateUserService
{

    public function run(array $data, object $user): object{

        if(isset($data['user']['password'])){
            $data['user']['password'] = Hash::make($data['user']['password']);
        }

        $user->update($data['user']);

        return $user;
    }
}
