<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\userController ;
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

Route::get("/",function (){
    return view("login") ;
}) ;


Route::get("/ajouterTache",function (){
    return view("ajouterTache") ;
}) ;
Route::get('/users',[userController::class,"index"] )->name("users.index");
Route::get('/users/{id}',[userController::class,"edit"])->name("user.edit")  ;
Route::get('/users/modifier/{id}',[userController::class,"update"])->name("user.modifier")  ;
Route::get('/users/delete/{id}',[userController::class,"destroy"])->name("user.destroy")  ;
Route::get('/users/detail/{id}',[userController::class,"show"])->name("user.show")  ;

Route::get('/ajouterUser', [userController::class,"create"]);


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

Route::get('/ajouterAffaire', function () {
    return view('ajouterAffaire');
});

Route::get("/client/store",[userController::class,'store'])->name("client.store");



    Route::get('/ajouterClient', function () {
        return view('AjouterClient');
    });

Route::match(['get', 'post'],'\ajax_search',[userController::class,'ajax_search'])->name("ajax_search");


