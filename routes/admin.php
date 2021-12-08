<?php

use App\Http\Controllers\Admin\{
    CompanyController,
    HomeController
};
use Illuminate\Support\Facades\Route;




Route::get('', [HomeController::class, 'index']);
Route::resource('empresa', CompanyController::class);
