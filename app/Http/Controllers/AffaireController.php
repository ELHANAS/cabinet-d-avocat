<?php

namespace App\Http\Controllers;

use App\Models\Affaire;
use App\Models\User;
use App\Models\Client;
use App\Http\Requests\CreatAffaireRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AffaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $data=DB::select('CALL praffaire()');
        return view('affaires',['Affaires'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $avocats=DB::select("select * from users where fonction = 'Avocat'") ;
        $dataclient=Client::all();


        return view("ajouterAffaire",['dataavocat'=>$avocats,'dataclient'=>$dataclient]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatAffaireRequest $request)
    {
        $data = new Affaire();
        $data->nomber = $request->input('numero');
        $data->name = $request->input('Nameaffair');
        $data->type = $request->input('typeAffaire');
        $nameClient =$request->input('nameclient');
        $dataC=DB::table("clients")->where(["name" => $nameClient ])->first();


        $data->id_client=$dataC->id;
        $nameavocat = $request->input('avocat');
        $dataU=DB::table("users")->where(["name" => $nameavocat ])->first();

        $data->id_user=$dataU->id;
        $docs = "" ;
        if($request->hasFile('document')){
            $documents= $request->file('document') ;
            foreach ( $documents as $document){
                $name = rand(1,100000).time().".".$document->extension();
                $document->move("documentaffaires" , $name) ;
                $docs = $docs.$name."//" ;
            }
        }

        $data->document = $docs ;

        $data->save();
        return redirect()->route("afficherAffaire")->with(['success'=>'Added sucsusful']);

    }
    /**
     * Display the specified resource.
     */
    public function show(Affaire $affaire)
    {
        $doc = explode("//",$affaire->document)  ;
        $documents = array_slice($doc,0,count($doc)- 1) ;

        return view("detailAffaire",["affaire" => $affaire , "documents" => $documents]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Affaire $affaire)
    {
        $avocats=DB::select("select * from users where fonction = 'Avocat'") ;
        $dataclient=Client::all();

        Return view("modifierAffaire",["data" => $affaire , 'dataavocat'=>$avocats,'dataclient'=>$dataclient]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CreatAffaireRequest $request, Affaire $affaire)
    {


        $affaire->nomber = $request->input('numero');
        $affaire->name = $request->input('Nameaffair');
        $affaire->type = $request->input('typeAffaire');
        $nameClient =$request->input('nameclient');
        $dataC=DB::table("clients")->where(["name" => $nameClient ])->first();

        $affaire->id_client=$dataC->id;
        $nameavocat = $request->input('avocat');
        $dataU=DB::table("users")->where(["name" => $nameavocat ])->first();
        $affaire->id_user=$dataU->id;
        $affaire->save();
        return redirect()->route("afficherAffaire")->with(['success'=>'update  successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Affaire $affaire){
        $affaire->delete();
        return redirect()->route("afficherAffaire")->with(['success'=>'delete  successfully']);

    }
    public  function ajax_search_affaire(Request $request){
        if($request->ajax()){
            $searchAffaire=$request->searchAffaire;
            $data=Affaire::feltreAffaires("name",$searchAffaire) ;
            return view('ajax_search_affaire',['Affaires'=>$data]);
        }

    }
    public  function  storeDocument(Request $request){
        $affaire = Affaire::select("*")->find($request->id) ;

        $docs = $affaire->document ;
        if($request->hasFile('document')){
            $documents= $request->file('document') ;
            foreach ( $documents as $document){
                $name = rand(1,100000).time().".".$document->extension();
                $document->move("documentaffaires" , $name) ;
                $docs = $docs.$name."//" ;
            }
        }
        $affaire->document = $docs ;
        $affaire->save();
        return redirect()->back() ;
    }
    public function  updateEtat(Affaire $affaire)
    {

        if($affaire->etat == 1){
            $affaire->etat =  0;
        }else{
            $affaire->etat =  1;
        }
        $affaire->save();
        return redirect()->back() ;
    }
    public function deleteFile($doc,$id)
    {

        $affaire = Affaire::select("*")->find($id) ;
        $docs = explode("//",$affaire->document)  ;

        $documents = array_slice($docs,0,count($docs)- 1) ;
        $newDocument = array_diff( $documents, [$doc]);
        $newFile =  "" ;
        foreach ($newDocument as $new) {
            $newFile =  $newFile.$new."//" ;
        }
        $affaire->document = $newFile  ;
        $affaire->save();
        return redirect()->back();
    }
    public  function affaires_type(Request $request){
        if($request->etat == "0"){
            $affaires = Affaire::getAffaireEncours() ;
        }elseif($request->etat == "1"){
            $affaires = Affaire::getAffaireTermine() ;
        }
        elseif( $request->type !== ""){
            $affaires=Affaire::feltreAffaires("type",$request->type) ;

        }
        return view('affaires',['Affaires'=>$affaires]);
    }
}
