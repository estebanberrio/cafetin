<?php

use App\Http\Controllers\Administrador\UserController;
use Illuminate\Support\Facades\Route;


//rutas para gestion de usuarios
Route::resource('users', UserController::class)->names('administrador.users');

?>
