<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stuController;
use App\Controllers\api\stuAPI;
use Illuminate\Contracts\Container\BindingResolutionException;
/*require __DIR__.'/../vendor/autoload.php';*/
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/' , [UserController::class, 'showData']);
// Route::get('/save-data' , [UserController::class, 'saveData']);
// Route::get('/update-data' , [UserController::class, 'updateData']);
// Route::get('/delete-data' , [UserController::class, 'deleteData']);

Route::get('/home', function () {
    return view('home');
});

Route::get('/student', function () {
    return view('crud');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/crud', function () {
    return view('Student');
});


/*Route::get('requireData', 'Api/stuController@requireData');*/
Route::post('/Student-Data', [stuController::class, 'saveData'])->name('student.save');
Route::get("/Student-Data", [stuController::class, 'showData']);

Route::get("/Student-Data-update/{stuId}/", [stuController::class, 'editData'])->name('student.edit');
Route::get("/Student-Data/{stuId}/", [stuController::class, 'deleteData'])->name('student.delete');

Route::post("/Student-Data-update/{stuId}", [stuController::class, 'updateData'])->name('student.update');

