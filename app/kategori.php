<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['name'];

    public function post()
    {
    return $this->hasMany('App\post');
    }
}
