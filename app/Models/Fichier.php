<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    public function classe(){
        return $this->belongsTo('App\Models\Classe','cate_id','id');
    }
}
