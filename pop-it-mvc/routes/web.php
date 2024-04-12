<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/teachers', [Controller\Site::class, 'teachers']);
Route::add('GET', '/departments', [Controller\Site::class, 'departments']);
Route::add('GET', '/discipline', [Controller\Site::class, 'discipline']);
Route::add('GET', '/add', [Controller\Site::class, 'add']);

