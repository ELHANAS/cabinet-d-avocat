<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\userController ;
use \App\Http\Controllers\ClientsController ;
use App\Http\Controllers\TacheController ;
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


/* Routes Taches */
Route::get("/Taches",[TacheController::class,"index"])->name("taches") ;
Route::get("/ajouterTache",function (){
    return view("ajouterTache") ;
}) ;
Route::post("/Taches_search_ajax",[TacheController::class,"ajax_search_Tache"])->name("ajax_Tache") ;
Route::get("/notification",[TacheController::class,"notification"])->name("tache.notification") ;

/* Routes Users */
Route::get('/ajouterUser', [userController::class,"create"]);
Route::match(['get', 'post'],'\ajax_user',[userController::class,'ajax_search'])->name("ajax_user");
Route::get('/users',[userController::class,"index"] )->name("users.index");
Route::get('/filtreUser',[userController::class,"filtreUser"])->name("filtreUser")  ;
Route::get('/users/{id}',[userController::class,"edit"])->name("user.edit")  ;
Route::get('/users/modifier/{id}',[userController::class,"update"])->name("user.modifier")  ;
Route::get('/users/delete/{id}',[userController::class,"destroy"])->name("user.destroy")  ;
Route::get('/users/detail/{id}',[userController::class,"show"])->name("user.show")  ;
Route::any("/updatePhotoUser" , [userController::class,"updatePhoto"])->name("updatePhotoUser");
Route::any("/user/store",[userController::class,'store'])->name("user.store");

/* Routes Clients */

Route::get('\create',[ClientsController::class,'create'])->name("create-clients");
Route::match(['get', 'post'],'\store',[ClientsController::class,'store'])->name("create-store");
Route::get('/edit/{id}',[ClientsController::class,'edit'])->name("edit-clients");
Route::match(['get', 'post'],'\update\{id}',[ClientsController::class,'update'])->name("updatclient");
Route::get('/client/destroy/{id}',[ClientsController::class,'destroy'])->name("delet-clients");
Route::match(['get', 'post'],'\ajax_search_client',[ClientsController::class,'ajax_search_client'])->name("ajax_search_client");
Route::match(['get', 'post'],'\ajax_feltre_client',[ClientsController::class,'ajax_filtre_client'])->name("ajax_feltre_client");
Route::get('/client/show/{id}',[ClientsController::class,'show'])->name("show-client");
Route::get('/clients',[ClientsController::class,'index'])->name('clients');

/* Routes Affaires */
Route::get('/affaires',[\App\Http\Controllers\AffaireController::class,'index'])->name('afficherAffaire');
Route::post('/ajax_search_affaire',[\App\Http\Controllers\AffaireController::class,'ajax_search_affaire'])->name('ajax_Affaire');
Route::get('/affaire/update/etat/{affaire}',[\App\Http\Controllers\AffaireController::class,'updateEtat'])->name('affaire.update.etat');
Route::get('/affaire/create',[\App\Http\Controllers\AffaireController::class,'create'])->name("create-affaires");
Route::post('/affaire/create/store',[\App\Http\Controllers\AffaireController::class,'store'])->name("create-store-affaire");
Route::get('/affaire/show/{affaire}',[\App\Http\Controllers\AffaireController::class,'show'])->name("show.affaire");
Route::post('/affaire/docement/store',[\App\Http\Controllers\AffaireController::class,'storeDocument'])->name("document-store-affaire");
Route::get('/affaire/docement/delete/{doc}/{id}',[\App\Http\Controllers\AffaireController::class,'deleteFile'])->name("document-delete");
Route::get('/Affaires/modifier/{affaire}',[\App\Http\Controllers\AffaireController::class,"edit"])->name("Affaires.modifier") ;
Route::get('/affaire/destroy/{affaire}',[\App\Http\Controllers\AffaireController::class,'destroy'])->name("affaire.destory");
Route::get("/affaire/update/{affaire}",[\App\Http\Controllers\AffaireController::class,"update"])->name("updataffaires");

/* Routes Home */
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::redirect("/","/login");

/* Routes parametre */


Route::get('/parametres', function () {
    return view('parametres');
});



/* Routes Color */

Route::get("/colors/{id}",[\App\Http\Controllers\ColorController::class,'store'])->name("color.store") ;













