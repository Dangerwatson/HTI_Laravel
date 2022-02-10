<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    public function classe(){
        return $this->belongsTo('App\Models\Classe','cate_id','id');
    }
    protected $fillable = ['codeProf','nom','prenom','gens','telephone','lieuDeNaissance','adresse','image','emailPersonne','cate_id','niveauEd','remarque'];
}
