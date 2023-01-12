<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function getResults($name = null){
        //Criei a pesquisa dentro do banco de dados
        if(!$name){
            return $this->get();
        }

        return $this->where('name', 'LIKE', "%{$name}%" )->get();
   
    }
    
}
