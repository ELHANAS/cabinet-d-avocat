<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Affaire extends Model
{
    use HasFactory;
    protected $table="affaires";
    protected $fillable = [
        'id',
        'name',
        'nomber',
        'prix',
        'adversaire',
        'jugement',
        'jugementDate',
        'type',
        'etat',
        'id_client',
        'id_user',
        'created_at',
        'updated_at'];
    public  function  getClient(){
        return Client::select("*")->find( $this->id_client) ;
    }
    public  function getAvocat(){
        return User::select("*")->find($this->id_user) ;
    }
    public static function  getAffaireEncours(){
         $data=DB::table('affaires')
            ->join('users', 'users.id', '=', 'affaires.id_user')
            ->join('clients', 'clients.id', '=', 'affaires.id_client')
            ->select('affaires.*','users.name As nameUser','clients.name As nameClient')
             ->where("etat" ,false)->get();
         return $data ;
    }
    public  static function  getAffaireTermine(){
        $data=DB::table('affaires')
            ->join('users', 'users.id', '=', 'affaires.id_user')
            ->join('clients', 'clients.id', '=', 'affaires.id_client')
            ->select('affaires.*','users.name As nameUser','clients.name As nameClient')
            ->where("etat" ,true)->get();
        return $data ;
    }
    public static  function  feltreAffaires( $type,$valeur){
        $data=DB::table('affaires')
            ->join('users', 'users.id', '=', 'affaires.id_user')
            ->join('clients', 'clients.id', '=', 'affaires.id_client')
            ->select('affaires.*','users.name As nameUser','clients.name As nameClient')
            ->where("affaires.$type","like","%$valeur%")
            ->get();


        return $data ;
    }

    public static function getTaches($id){
       return   Tache::select("*")->where("id_affaire", $id) ;
    }


}
