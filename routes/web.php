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

Route::match(['get', 'post'],'\ajax_user',[userController::class,'ajax_search'])->name("ajax_user");
Route::get('/users',[userController::class,"index"] )->name("users.index");
Route::get("/",function (){
    return view("login") ;
}) ;


Route::get("/ajouterTache",function (){
    return view("ajouterTache") ;
}) ;




Route::get('/ajouterUser', [userController::class,"create"]);



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

Route::get("/user/store",[userController::class,'store'])->name("user.store");



    Route::get('/ajouterClient', function () {
        return view('AjouterClient');
    });

Route::get('/filtreUser',[userController::class,"filtreUser"])->name("filtreUser")  ;
Route::get('/users/{id}',[userController::class,"edit"])->name("user.edit")  ;
Route::get('/users/modifier/{id}',[userController::class,"update"])->name("user.modifier")  ;
Route::get('/users/delete/{id}',[userController::class,"destroy"])->name("user.destroy")  ;
Route::get('/users/detail/{id}',[userController::class,"show"])->name("user.show")  ;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect("/","/login");




Route::get('\create',[\App\Http\Controllers\ClientsController::class,'create'])->name("create-clients");
Route::match(['get', 'post'],'\store',[\App\Http\Controllers\ClientsController::class,'store'])->name("create-store");
Route::get('\edit\{id}',[\App\Http\Controllers\ClientsController::class,'edit'])->name("edit-clients");
Route::match(['get', 'post'],'\update\{id}',[\App\Http\Controllers\ClientsController::class,'update'])->name("updatclient");
Route::get('\delet\{id}',[\App\Http\Controllers\ClientsController::class,'destroy'])->name("delet-clients");
Route::match(['get', 'post'],'\ajax_search_client',[\App\Http\Controllers\ClientsController::class,'ajax_search_client'])->name("ajax_search_client");
Route::get('\show\{id}',[\App\Http\Controllers\ClientsController::class,'show'])->name("show-client");
Route::get('/clients',[\App\Http\Controllers\ClientsController::class,'index'])->name('clients');
