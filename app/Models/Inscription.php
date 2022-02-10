<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    public function classe(){
        return $this->belongsTo('App\Models\Classe','cate_id','id');
    }
    protected $table='inscriptions';
    protected $fillable = ['cate_id','nom','prenom','gens','adresse','image'];
}
