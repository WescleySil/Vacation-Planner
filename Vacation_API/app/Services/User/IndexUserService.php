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

    public function run($data): Collection{

        $id = $data['filters']['id'] ?? null;
        $name = $data['filters']['name'] ?? null;
        $email = $data['filters']['email'] ?? null;

        $query = $this->user
            ->when($id, function ($query) use ($id){
               return $query->where('id', $id);
            })
            ->when($name, function ($query) use ($name){
                return $query->where('name', 'in', $name);
            })
            ->when($email, function ($query) use ($email){
               return $query->where('email', $email);
            });
        return $query;
    }
}
