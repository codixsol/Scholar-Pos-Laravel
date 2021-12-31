<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    function addPermission(Request $request){


        $check =  Permission::where('name',$request->permission)->first() ;
        if ($check != null) {

            return response(['error'=>203]);
        }

        $name = $request->permission;
        $permission_save = new Permission();
        $permission_save->name = $name;
        $permission_save->save();

        if ($permission_save == true) {

            return response(['success'=>201]);
        }
        else{
            return response(['error'=>202]);

        }
    }
}
