<?php

namespace App\Http\Controllers;

use App\Http\Requests\rolesAjouterUser;
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
        $user->role = $request->role ;

        if($request->has('photo') and  $request->photo){
            $image = $request->photo ;
            $name = "".time().".".$image->extension()."";
            $path = Storage::disk("public")->put($name ,$image ) ;
            dd($name ."//".$path) ;
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
        $user->role = $request->role ;
        $user->save() ;
        return redirect(route("users.index")) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
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
    $data=User::where(["role"=>$role])->get() ;

    return view("listeUsers",["users"=>$data]) ;
}
}
