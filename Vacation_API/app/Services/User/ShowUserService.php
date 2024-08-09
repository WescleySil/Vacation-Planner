<?php

namespace App\Services\User;

use App\Models\User;
use Mockery\Exception;
use Symfony\Component\Translation\Exception\NotFoundResourceException;

class ShowUserService
{
    private User $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function run($request)
    {

        $id = $request->id;

        $query = $this->user
            ->when($id, function ($query) use ($id){
               return $query->where('id',$id);
            });

        return $query->get();
    }
}
