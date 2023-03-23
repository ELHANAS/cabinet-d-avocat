<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $table="clients";
    protected $fillable = [
        'id',
        'nom',
        'prenom',
        'adresse',
        'ville',
        'tel',
        'cin',
        'active',
        'datenaissance',
        'created_at',
        'updated_at'
    ];
}
