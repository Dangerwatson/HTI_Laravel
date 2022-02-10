<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    public function classe(){
        return $this->belongsTo('App\Models\Classe','cate_id','id');
    }
    public function categoryMat(){
        return $this->belongsTo('App\Models\Catmatiere','cateMat_id','id');
    }
    protected $fillable = ['cateMat_id','nomMatiere','coefficient','cate_id'];
}
