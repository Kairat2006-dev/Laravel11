<?php

namespace App\Http\Controllers\Role;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return Role::all();
    }

    public function show(Role $role)
    {
        return Role::find($role);
    }

    public function store()
    {
        $data = [
            'title' => 'asdsad',

        ];
        $role =Role::create($data);
        return $role;
    }
    public function update(Role $role)
    {
        $data = [
            'title'=>'qweqwe'
        ];
        $role->update($data);
        return $role;
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return dd(111);
    }
}
