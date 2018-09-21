<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['title','content', 'kategori_id'];

    public function kategori()
    {
    return $this->belongsTo('App\kategori');
    }
}
