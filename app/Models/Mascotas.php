<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nick',
        'password',
        'raça',
        'sexe',
        'edat',
        'color',
        'nom_huma',
        'telefon_huma',
        'foto',
    ];

    public function validationRules(){
        return [
            'nick'         => 'required',
            'password'     => 'required',
            'raça'         => 'required',
            'sexe'         => 'required',
            'edat'         => 'required',
            'color'     => 'required',
            'nom_huma'     => 'required',
            'telefon_huma' => 'required',
            'foto'         => 'required',
        ];
    }

}
