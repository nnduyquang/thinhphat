<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'id','name','image','description','path','seo_title','seo_description', 'isActive','order','level','parent_id','user_id','created_at','updated_at'
    ];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function products(){
        return $this->hasMany('App\Product','category_id');
    }
}
