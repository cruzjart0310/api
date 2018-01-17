<?php

namespace App\Http\Controllers\Users;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        // $permissionRole = User::with('roles.permissions')->where('id', $user->id)->get();
        // $permissionUser = User::with('permissions')->get();
        
        $permissionRole = User::find($user->id)->roles;
        $permissionUser = User::find($user->id)->permissions;

        $permissions = $permissionRole->merge($permissionUser)->unique('id');

        foreach ($permissions as $i => $permission) {
            if($permission->pivot){
                $permissions[$i]['permission_id'] = $permission->pivot->permission_id; 
            }
        }

        return $permissionRole;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
