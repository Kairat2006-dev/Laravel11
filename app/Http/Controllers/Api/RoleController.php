<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\UpdateStore;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Resources\RoleResource;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        return RoleResource::collection(Role::all());
    }

    public function show(Role $role)
    {
        return RoleResource::make($role);
    }

    public function update(UpdateStore $request, Role $role)
    {
        $data = $request->validated();
        $role->update($data);
        return RoleResource::make($role);
    }

    public function store(\App\Http\Requests\Role\StoreRequest $request)
    {
        $data = $request->validated();
        $role = Role::create($data);
        return RoleResource::make($role);
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return 'delete';
    }
}
