<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = 'authors';
    protected $fillable = ['name', 'date_birth', 'biography'];
    
    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }

}

