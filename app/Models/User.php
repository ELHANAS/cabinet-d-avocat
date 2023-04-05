<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public  static function getAffairesAvocat($id){
        $data=DB::table('affaires')
            ->join('users', 'users.id', '=', 'affaires.id_user')
            ->join('clients', 'clients.id', '=', 'affaires.id_client')
            ->select('affaires.*','users.name As nameUser','clients.name As nameClient')
            ->where("id_user",$id)->get() ;
        return $data ;
    }


    public  static function getClientAvocat($id){
        $data=DB::table('affaires')
            ->join('users', 'users.id', '=', 'affaires.id_user')
            ->join('clients', 'clients.id', '=', 'affaires.id_client')
            ->where("id_user",$id)
            ->select('affaires.id_client')
            ->groupBy("affaires.id_client")
            ->get() ;
        return $data ;
    }
    public  static  function getTachesAvocat($id){
        $taches = [] ;
        $affaires = User::getAffairesAvocat($id) ;
        foreach ( $affaires as $affaire){
            $tachesA = Affaire::getTaches($affaire->id) ;
            array_push($taches, $tachesA) ;
        }
        return $taches ;
    }
}
