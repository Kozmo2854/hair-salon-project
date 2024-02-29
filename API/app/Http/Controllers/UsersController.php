<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends BaseController
{
    protected mixed $modelClass = User::class;

    public function store(Request $request): Model
    {
        $credentials = $request->all();
        $user = new ($this->modelClass)();

        $user->email = $credentials['email'];
        $user->password = Hash::make($credentials['password']);
        $user->name = $credentials['name'];
        $user->lastname = $credentials['lastName'];
        $user->role_id = $credentials['roleId'];


        $user->save();
        return $user;
    }

    public function verifyUser()
    {
        dd(Auth::user());
        return Auth::user()->role_id;
    }
}
