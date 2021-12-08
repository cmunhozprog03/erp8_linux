<?php

use App\Http\Controllers\{
    AddressCompanyController,
    CategoryController,
    CompanyController,
    SubcategoryController
};
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('empresa', CompanyController::class);
//Route::resource('empresa-enderecos', AddressCompanyController::class);
//Route::resource('categorias', CategoryController::class);
//Route::resource('subcategorias', SubcategoryController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
