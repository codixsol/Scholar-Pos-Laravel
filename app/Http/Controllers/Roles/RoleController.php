<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{

    function addRole(Request $request)
    {

        $check =  Role::where('name',$request->role)->first() ;
        if ($check != null) {

            return response(['error'=>203]);
        }

        $name = $request->role;
        $role_save = new Role();
        $role_save->name = $name;
        $role_save->save();

        if ($role_save == true) {

            return response(['success'=>201]);
        }
        else{
            return response(['error'=>202]);

        }
    }

     function listRole(Request $request){
        $data = Role::all();
        return response($data);
     }

      function deleteRole(Request $request,$id){
          try {

              $del = Role::where('id', $request->id)->delete();

              if ($del == true) {
                  return response(['success' => 201]);
              } else {
                  return response(['error' => 202]);
              }
          }catch (\Exception $exception){
              return $exception->getMessage();
          }

      }

      function editRole(Request $request){

         $edit = Role::where('id',$request->id)->first();
         return response($edit);

      }

      function updateRole(Request $request){

         return response($request->editrole->editrole->name);
         /* $update = new Role();
          $update->exists = true;
          $update->id = $request->id;
          $update->name = $name;
          $update->save();

          if ($update == true) {

              return response(['success'=>201]);
          }
          else{
              return response(['error'=>202]);

          }*/

      }

}
