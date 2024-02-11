<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class UsersController
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return User::all();
    }

    /**
     * @param User $user
     * @return User
     */
    public function show(User $user): User
    {
        return $user;
    }

    /**
     * @throws Exception
     */
    public function store(Request $request): User
    {
        User::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user): User
    {
        $user->update($request->all());
        return $user;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): ?bool
    {
        return $user->delete();

    }
}
