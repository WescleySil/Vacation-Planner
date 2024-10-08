<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class StoreUserService
{
    private User $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function run(array $data): object
    {
        $data['user']['password'] = Hash::make($data['user']['password']);

        return $this->user->create($data['user']);

    }
}
