<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

$routesConfig = config('routes-config');

Route::get('/', [PageController::class, 'homepage'])->name('home');

foreach ($routesConfig as $key => $val) {
    $routePath  = $val['route-path'];
    $viewName  = $val['view-name'];
    $routeName  = $val['route-name'];

    Route::view('/' . $routePath, 'layouts.' . $viewName)->name($routeName);
};