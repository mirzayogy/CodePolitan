<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Book extends Model
{

    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function getCover(){
        if(substr($this->cover,0,5) == 'https'){
            return $this->cover;
        }

        if($this->cover){
            return asset($this->cover);
        }

        return "https://via.placeholder.com/100x150.png?text=no+cover";
    }

    public function borrowed(){
        return $this->belongsToMany(User::class, 'borrow_history');
    }
}
