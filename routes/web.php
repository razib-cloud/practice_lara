<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get("/razib", function() {
// return view("user");
// });


// Route::get('/users/{name?}', function($name=""){
// echo "My name is {$name}";

// });


// Route::get("/salman/{userName}", function($name){
//     return view("user", compact('name'));

// });


Route::get("userlist", function(){

    $users=[
        ["id"=>1, "name"=>"hasan","address"=>"Dhaka"],
        ["id"=>2, "name"=>"kabir","address"=>"Cumilla"],
        ["id"=>3, "name"=>"dev","address"=>"Rangpur"],
        ["id"=>4, "name"=>"tuli","address"=>"Lalbagh"],
        ["id"=>5, "name"=>"tumpa","address"=>"Dhaka"],
        ["id"=>6, "name"=>"kishori","address"=>"Gopalpur"],
    ];

    return view("userlist", compact('users'));



});


Route::get("/roleindex", [RoleController::class, 'index']);
Route::get("/rolecreate", [RoleController::class, 'create']);
Route::get("/roleupdate", [RoleController::class, 'update']);



Route::post("/rolecreate", [RoleController::class, 'store']);




Route::get("/test/{id?}/{name?}", [TestController::class, 'index']);




Route::get('user/', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create']);
Route::post('/user/store', [UserController::class, 'store']);


