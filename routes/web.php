<?php

use App\Http\Controllers\AuteurController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('/' , function(){
    return view('index');
});

Route::get('/auth' , function(){
    return view('auth');
});

Route::get('/book' , function(){
    return view('book');
});

/*Route::get('/profile' , function(){
    return view('profile');
});*/

Route::get('/admin' , function(){
    return view('admin');
});
Route::post('/addCategory' , [CategoryController::class , 'store']);
/*Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
);*/

Route::get('/profile' , [UserController::class , 'profile']);

Route::post('/addlivre' , [LivreController::class , 'store']);

Route::post('/addAuteur' , [AuteurController::class , 'store']);


Route::get('/products/index' , [ProductController::class , 'index']);
Route::get('/products/create' , [ProductController::class , 'create']);
Route::get('/products/edit' , [ProductController::class , 'edit']);


Route::post('/products/store' , [ProductController::class , 'store']);
