<?php
use App\Http\Controllers\Auth\RegisteredUserController;


Route::get('/user/profile', [RegisteredUserController::class, 'show'])
    ->name('profile.show');

Route::put('/user/update/{id}', [RegisteredUserController::class, 'update'])
    ->name('profile.update');
