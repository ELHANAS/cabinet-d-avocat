<?php

namespace App\Http\Controllers;

use App\Http\Requests\roleCreateTache;
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
        return view("tache.taches",["taches" => $taches]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        {
            $dataaffaire=Affaire::all();
            return view("tache.ajouterTache",['dataaffaire'=>$dataaffaire]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(roleCreateTache $request)
    {
        $data['titre']=$request->input('titre');
        $data['Description'] = $request->input('description');
        $data['DTache']=$request->input('date');
        $data['id_affaire']= intval($request->input('affaire')) ;

        Tache::create($data);
        return redirect()->route("taches")->with(['success'=>'Tache est ajouté avec succès']);
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
        $dataaffaire=Affaire::all();
        return view("tache.modifierTache",["tache" => $tache , "dataaffaire" => $dataaffaire]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $tache = Tache::select("*")->find($request->id) ;
        $tache->titre=$request->input('titre');
        $tache->Description= $request->input('description');
        $tache->DTache=$request->input('date');
        $tache->id_affaire= intval($request->input('affaire')) ;

        $tache->save();
        return redirect()->route("taches")->with(['success'=>'Tache est modifié avec succès']);
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

            return view('tache.ajax_search_tache',['taches'=>$data]);
        }
    }
    public  function notification(){
        return view("tache.pageNotification",["taches" => Tache::getTacheArm()]) ;
    }
}
