<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * @return Collection
     */
    public function index(): Collection
    {
        return Role::all();
    }

    /**
     * @param Role $role
     * @return Role
     */
    public function show(Role $role): Role
    {
        return $role;
    }

    /**
     * @throws Exception
     */
    public function store(Request $request): Role
    {
        return Role::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role): Role
    {
        $role->update($request->all());
        return $role;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role): ?bool
    {
        return $role->delete();

    }
}
