<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Http\Requests\CreatClientsRequest;

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
        $dataupdate['name']=$request->input('name');
        $data['adresse'] = $request->input('Adress');
        $data['ville'] = $request->input('Ville');
        $data['tel'] = $request->input('tel');
        $data['cin'] = $request->input('CIN');
        $data['active']= 0;
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
    function update($id,CreatClientsRequest $request){
        $dataupdate['name']=$request->input('name');

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
            $data=Client::where("name","like","%{$searchClient}%")->orderby("id","ASC")->get();
            return view('ajax_search_client',['data'=>$data]);

        }
    }
    function ajax_filtre_client(Request $request){
        if($request->ajax()){
            $filtrerClient=$request->filtrerClient;
            $data=Client::where("ville","like","%{$filtrerClient}%")->orderby("id","ASC")->get();
            return view('ajax_search_client',['data'=>$data]);

        }
    }
    public  function show(int $id){
        $data=Client::select("*")->find($id);
        return view('profilClient' ,['data'=>$data]);
    }

}
