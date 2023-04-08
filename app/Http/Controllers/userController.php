<?php

namespace App\Http\Controllers;

use App\Http\Requests\rolesAjouterUser;
use App\Models\Affaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("user.listeUsers",["users"=>User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("user.ajouterUser") ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(rolesAjouterUser $request)
    {
        $user = new User();
        $user->name = $request->name ;
        $user->email = $request->email ;
        $user->password =Hash::make($request->password)  ;
        $user->tel = $request->tel ;
        $user->fonction = $request->Fonction ;
        if($request->has('image')){
            $image = $request->file('image') ;
            $name = $user->name.time().".".$image->extension();
            $image->move("imageUsers" , $name) ;
            $user->photo = $name ;
        }
        $user->save() ;
        return redirect(route("users.index"))->with(["success"=>"L'utilisateur  $user->name  est ajouté avec succès"]) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $taches = User::getTachesAvocat($id);
        $affaires = User::getAffairesAvocat($id) ;
        $clients = User::getClientAvocat($id) ;
        $user = User::select("*")->find($id) ;
        if(!$user){
            return  redirect()->back()->withErrors("Cette utilisateur n'existe pas") ;
        }
        return view("user.profilUser",["user"=>$user , "NAffaires" => count( $affaires ) , "NClients" =>count( $clients) , "NTaches" => count($taches)]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::select("*")->find($id) ;
        return view("user.modifierUser",["user"=>$user]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $user = User::select("*")->find($id) ;
        $user->name = $request->name ;
        $user->email = $request->email ;

        $user->tel = $request->tel ;
        $user->fonction = $request->Fonction ;
        if($request->admin == "admin"){
            $user->role = 1 ;
        }
        elseif($request->admin == "user"){
        $user->role = 0 ;
        }
        $user->save() ;
        return redirect(route("users.index")) ;
    }
    public  function updatePhoto(Request $request){
        $user = User::select("*")->find(Auth::user()->id);
        if($request->has('image')){
            $image = $request->file('image') ;



            $name = time().".".$image->extension();
            $image->move("imageUsers" , $name) ;

            $user->photo = $name ;
        }
        $user->save();
        return redirect()->back() ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $name = User::select("name")->find($id) ;
        if($id == Auth::user()->id ){
            User::where(['id'=>$id])->delete();
             return redirect(route("login"));
        }
        User::where(['id'=>$id])->delete();
        return redirect(route("users.index"))->with("success","supprimer $name->name est réussi") ;

    }

    function ajax_search(Request $request){
        if($request->ajax()){
            $searchClient=$request->searchClient;
            $data=User::where("name","like","%{$searchClient}%")->orderby("id","ASC")->get();
            return view('user.ajax_search_user',['data'=>$data]);
        }
    }
    public  function  filtreUser(Request $request){
        $role = $request->filtreRole ;
        $data=User::where(["fonction"=>$role])->get() ;
        return view("user.listeUsers",["users"=>$data]) ;
    }
}
