<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adminn', [App\Http\Controllers\AdminController::class, 'admin'])->name('admin');
Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');
Route::get('/liste', [App\Http\Controllers\crudController::class, 'liste_delet'])->name('liste');
Route::get('/pdf', [App\Http\Controllers\AdminController::class, 'pdf'])->name('pdf');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/ajouter', [App\Http\Controllers\crudController::class, 'add']);
Route::post('/ajouter/traitement', [App\Http\Controllers\crudController::class, 'add_traitement']);
Route::get('/adminn', [App\Http\Controllers\AdminController::class,'liste_etudient']);
Route::get('/update-etudiant/{id}',[App\Http\Controllers\crudController::class, 'update_etudient']);
Route::post('/update/traitement', [App\Http\Controllers\crudController::class, 'update_etudient_traitement']);
Route::get('/delete-etudiant/{id}',[App\Http\Controllers\crudController::class,'delete_etudient']);

Route::get('/generate-pdf',[App\Http\Controllers\crudController::class, 'generatePDF']);

Route::get('/search', [App\Http\Controllers\crudController::class, 'search']);

Route::get('/generate-csv',[App\Http\Controllers\crudController::class, 'generateCSV']);
