<?php

namespace App\Http\Controllers;

use App\Models\Affaire;
use App\Models\client;
use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {




        $taches = Tache::all() ;
        foreach ($taches as $tache){
            $id = $tache->id ;
            DB::select("CALL notifiction(?)",array($id) );
            DB::select("CALL notifiction_tache_t(?)",array($id) );
        }

        $nmbrClientActive = count(client::where(["active" => 1])->get()) ;


        return view('home',["NClients"=>$nmbrClientActive,"NAffaires" => count(Affaire::getAffaireEncours()),"NTaches" =>count(Tache::getTachesPasT())]);
    }
}
