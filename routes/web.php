<?php
/*
|--------------------------------------------------------------------------
| Route Definitions
|--------------------------------------------------------------------------
|
| This section defines routes for the application using the Sentgine\ShadowMonarch\Route
| class. Various HTTP methods such as GET, POST, PATCH, and DELETE are
| mapped to controller actions.
|
*/

use Sentgine\Ray\Route;

Route::get('/', [App\Controllers\Welcome::class, 'index']);
