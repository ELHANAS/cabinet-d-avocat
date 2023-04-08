<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    public static function getTacheArm(){
        return Tache::select("*")->where("lalarme",true)->where("TacheF",false)->get() ;
    }
    public  static  function  getTachesPasT(){
        return Tache::select("*")->where("TacheF",false)->get() ;
    }
    protected $fillable = [
      'titre',
        'Description',
        'DTache',
        'id_affaire'
    ];
}
