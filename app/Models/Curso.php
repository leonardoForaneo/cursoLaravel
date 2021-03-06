<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //protected $fillable = ['name', 'description', 'category'];
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Asignamos el modelo a una tabla sin utilizar la convencion
    //protected $table = "users";
}
