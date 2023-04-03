<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Color extends Model
{
    use HasFactory;
    static  function getColors(){
        if(Auth::user()){
            $colors =  Color::where(['id_user' => Auth::user()->id])->first() ;
            return $colors ;
        }
        return redirect(route("login")) ;






    }
}
