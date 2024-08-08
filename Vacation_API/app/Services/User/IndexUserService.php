<?php

namespace App\Services\User;

use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
class IndexUserService
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function run($data){

        $name = $data['filters']['name'] ?? null;
        $email = $data['filters']['email'] ?? null;

        $query = $this->user
            ->when($name, function($query) use ($name){
               return $query->where('name','like', '%'.$name.'%');
            })
            ->when($email, function ($query) use ($email){
               return $query->where('email', 'like', '%'.$email.'%');
            });


        return $query->get();
    }
}
