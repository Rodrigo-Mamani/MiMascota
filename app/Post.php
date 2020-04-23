<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $guarded=[];
    
    protected $fillable = [
        'id','created_at','updated_at','imagen1', 'imagen2', 'imagen3','text','user_id'
    ];
    
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
}
