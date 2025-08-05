<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DemoController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\RegisterController;

use Illuminate\Http\Request;


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

// Route::get('home', function () {
//     return view('hello');
// });

// Route::get('about-a',function(){
//     return view('about');
// });


// Route::view('welcome','welcome');

// Route::get('//{value?}', function($value = null){
//     return view('welcome')->with(['value' => $value]);
// });

Route::get('component',function(){
    return view('component1');
});

Route::get('form', [RegisterController ::class, 'index']);
Route::post('register', [RegisterController ::class, 'register']);
Route::get('',[RegisterController ::class, 'view']);
Route::get('edit/{emp_id}',[RegisterController ::class, 'edit_employe']);
Route::post('update/{Id}',[RegisterController ::class, 'update_emp']);
Route::get('delete/{Id}',[RegisterController ::class, 'delete_emp']);


// Route::get('/',[DemoController ::class, 'index']);

Route::get('test',TestController::class);


Route::get('put-session', function(Request $request){

    $request->session()->put('name', 'John Doe');
    $request->session()->put([
        'name' => 'affan',
        'email' => 'khan@gamil.com',
        'age' => 25
    ]);
});


Route::get('get-session', function(Request $request){
    
  //  echo $request->session()->get('name');

    echo "<pre>";
    print_r(session()->all());

});

Route::get('forgot-session',function(Request $request){
    $request->session()->flush();
});

Route::get('form', [RegisterController ::class, 'index']);

Route::get('/login',[App\Http\Controllers\AuthController :: class, 'index']);
Route::get('login',[App\Http\Controllers\AuthController :: class, 'login'])->name('login');

Route::post('login',[App\Http\Controllers\AuthController :: class, 'login']);