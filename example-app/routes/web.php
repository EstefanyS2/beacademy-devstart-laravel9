<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ViaCepController
};

Route::get('/', function() {
      return view('welcome');
});

///Route::post('products', [UserController::class, 'list'])->name('products');
//Route::get('produto/lista', [UserController::class, '']);

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/user', [UserController::class, 'store'])->name('users.store');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show'); 



//VIA CEP SERVICE
Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');