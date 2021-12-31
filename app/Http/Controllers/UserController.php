<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    function register(Request $request){

        $validator = Validator::make($request->all(),
            [

                'email' => 'required|email|unique:users,email',
            ]
        );

        if ($validator->fails()) {
            return response(['error'=>201]);
        }


        $save = new User();
        $save->name = $request->fname;
        $save->email = $request->email;
        $save->password = Hash::make($request->password);
        $save->save();
        try {


            if ($save == true) {
                $data = ['fname' => $request->fname, 'id' => $save->id];
                $user['to'] = $request->email;
                $user['name'] = $request->fname;
                Mail::send('verify', $data, function ($message) use ($user) {
                    $message->to($user['to']);
                    $message->subject('Hello ' . ' ' . $user['name']);
                });
                return json_encode($save);
            }
        }catch (\Exception $exception){
            dd($exception->getMessage());
        }
    }
    function login(Request $request){
        $user = User::where('email',$request->email)->where('verify',1)->first();
         if (isset($user)) {
             if (!$user || !Hash::check($request->password, $user->password)) {

                 return response(['error' => 202]);
             }else {
                 return $user;
             }
         }
         else{
             return response(['error' => 201]);
         }
    }

    function verify_account(Request $request){

        $id = decrypt($request->id);
        $verify = User::where('id',$id)->update(['verify'=>1]);

    }

   function forgot(Request $request){
       $user = User::where('email',$request->email)->where('verify',1)->first();
       if ($user != null){
           $data = ['fname' => $user->fname, 'id' => $user->id];
           $users['to'] = $user->email;
           $users['name'] = $user->fname;
           Mail::send('forgot', $data, function ($message) use ($users) {
               $message->to($users['to']);
               $message->subject('Hello ' . ' ' . $users['name']);
           });
           return response(['success'=>202]);
       }
       else{
           return response(['error'=>201]);

       }
   }
function forgot_password(Request $request){
         $id =  $request->id;
        return view('forgot_password',['id'=>$id]);
}
function forgot_save(Request $request){


        $update = new User();
        $update->exists = true;
        $update->id = decrypt($request->id);
        $update->password = Hash::make($request->npassword);
        $update->save();
        if ($update==true){
            return json_encode(['success'=>201,'message'=>"Your Password Has Been Changed Successfully"]);

        }
        else{
            return json_encode(['error'=>202,'message'=>"SomeThing Wrong Here Please Try Again Later"]);
        }

}

}
