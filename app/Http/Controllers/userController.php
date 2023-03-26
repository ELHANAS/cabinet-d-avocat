<?php

namespace App\Http\Controllers;

use App\Http\Requests\rolesAjouterUser;
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
        return view("listeUsers",["users"=>User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("AjouterUser") ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name ;
        $user->email = $request->email ;
        $user->password =Hash::make($request->password)  ;
        $user->tel = $request->tel ;
        $user->fonction = $request->role ;

        if($request->has('image')){
            $image = $request->file('image') ;



            $name = time().".".$image->extension();
            $image->move("imageUsers" , $name) ;

            $user->photo = $name ;
        }
        $user->save() ;
        return redirect(route("users.index"))->with(["success"=>"user est ajouter avec succes"]) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $user = User::select("*")->find($id) ;
        if(!$user){
            return  redirect()->back()->withErrors("Cette utilisateur n'existe pas") ;
        }
        return view("profilUser",["user"=>$user]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::select("*")->find($id) ;
        return view("modifierUser",["user"=>$user]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $user = User::select("*")->find($id) ;
        $user->name = $request->name ;
        $user->email = $request->email ;
        $user->password =Hash::make($request->password) ;
        $user->tel = $request->tel ;
        $user->fonction = $request->role ;
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
        if($id == Auth::user()->id ){
            User::where(['id'=>$id])->delete();
             return redirect(route("login"));
        }
        User::where(['id'=>$id])->delete();
        return redirect(route("users.index"))->with("success","user est supprimer avec succes") ;

    }

    function ajax_search(Request $request){
        if($request->ajax()){
            $searchClient=$request->searchClient;
            $data=User::where("name","like","%{$searchClient}%")->orderby("id","ASC")->get();
            return view('ajax_search_user',['data'=>$data]);
        }}
    public  function  filtreUser(Request $request){
        $role = $request->filtreRole ;
    $data=User::where(["fonction"=>$role])->get() ;

    return view("listeUsers",["users"=>$data]) ;
}
}
