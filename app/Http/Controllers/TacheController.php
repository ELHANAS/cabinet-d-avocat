<?php

namespace App\Http\Controllers;

use App\Models\Affaire;
use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches = DB::select("CALL prTaches()") ;
        return view("taches",["taches" => $taches]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tache $tache)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tache $tache)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tache $tache)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tache $tache)
    {
        //
    }

    public  function ajax_search_Tache(Request $request){

        if($request->ajax()){
            $searchTach=$request->searchTache;

            $data=DB::table('taches')
                ->join('affaires', 'affaires.id', '=', 'taches.id_affaire')
                ->select('taches.*','affaires.name')
                ->where("titre","like","%$searchTach%")
                ->get();

            return view('ajax_search_tache',['taches'=>$data]);
        }
    }
    public  function notification(){
        return view("pageNotification",["taches" => Tache::getTacheArm()]) ;
    }
}
