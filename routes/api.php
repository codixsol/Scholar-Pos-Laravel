<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Roles\RoleController;
use App\Http\Controllers\Roles\PermissionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/forgot',[UserController::class,'forgot']);


Route::post('/add/role',[RoleController::class,'addRole']);
Route::post('/delete/role/{id}',[RoleController::class,'deleteRole']);
Route::post('/edit/role/{id}',[RoleController::class,'editRole']);
Route::post('/update/role/{id}',[RoleController::class,'updateRole']);
Route::get('/role/list',[RoleController::class,'listRole']);

Route::post('/add/permission',[PermissionController::class,'addPermission']);
Route::get('/permission/list',[PermissionController::class,'listPermission']);
Route::post('/delete/permission/{id}',[PermissionController::class,'deletePermission']);

