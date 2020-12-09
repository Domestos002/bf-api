<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return UserResource
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }
}
