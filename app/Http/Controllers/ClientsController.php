<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Http\Requests\CreatClientsRequest;
use App\Http\Requests\updatClientRequest;

;

use App\Models\job;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        $data=client::select("*")->orderby("id","ASC")->get();
        return view('Clients',['data'=>$data]);
    }
    public function create(){

        return view("AjouterClient");

    }
    function store(CreatClientsRequest $request){

        $data['nom'] = $request->input('nom');
        $data['prenom'] = $request->input('Prenom');
        $data['adresse'] = $request->input('Adress');
        $data['ville'] = $request->input('Ville');
        $data['tel'] = $request->input('tel');
        $data['cin'] = $request->input('CIN');
        $data['active']= $request->input('activiter');
        $data['datenaissance'] = $request->input('dat_naiss');
        $data['create_at']= date("Y-m-d H:i:s");
        $data['update_at']= date("Y-m-d H:i:s");
        Client::create($data);
        return redirect()->route("clients")->with(['success'=>'Added sucsusful'])


            ;
    }
    function edit($id){
        $data=Client::select("*")->find($id);
        return view('edit_client' ,['data'=>$data]);
    }
    function update($id,updatClientRequest $request){
        $dataupdate['nom']=$request->input('nom');
        $dataupdate['prenom'] = $request->input('Prenom');
        $dataupdate['adresse'] = $request->input('Adress');
        $dataupdate['ville'] = $request->input('Ville');
        $dataupdate['tel'] = $request->input('tel');
        $dataupdate['cin'] = $request->input('CIN');
        $dataupdate['active']= $request->input('activiter');
        $dataupdate['datenaissance'] = $request->input('dat_naiss');
        $dataupdate['updated_at']= date("Y-m-d H:i:s");
        Client::where(['id'=>$id])->update($dataupdate );
        return redirect()->route("clients")->with(['success'=>'update  sucsusful']);

    }
    function destroy($id){
        Client::where(['id'=>$id])->delete();
        return redirect()->route("clients")->with(['success'=>'delete  sucsusful']);

    }
    function ajax_search_client(Request $request){
        if($request->ajax()){
            $searchClient=$request->searchClient;
            $data=Client::where("nom","like","%{$searchClient}%")->orderby("id","ASC")->get();
            return view('ajax_search_client',['data'=>$data]);

        }


    }
    public  function show(int $id){
        $data=Client::select("*")->find($id);
        return view('profilClient' ,['data'=>$data]);
    }

}
