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

Route::get('/acceuil', function () {
    return view('acceuil');
});
Route::get('/users', function () {
    return view('listeUsers');
});
Route::get("/",function (){
    return view("index") ;
}) ;


Route::get('/ajouterUser', function () {
    return view('AjouterUser');
});


Route::get('/clients', function () {
    return view('Clients');
});
Route::get('/affaires', function () {
    return view('affaires');
});

Route::get('/taches', function () {
    return view('tache');
});
Route::get('/parametres', function () {
    return view('parametres');
});
Route::get('/User', function () {
    return view('profilUser');
});



