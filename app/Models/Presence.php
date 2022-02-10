<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    public function classe(){
        return $this->belongsTo('App\Models\Classe','cate_id','id');
    }

    public function inscription(){
        return $this->belongsTo('App\Models\Inscription','id_pers','id');
    }
    protected $fillable = ['presAbs','id_pers','cate_id'];
}
