<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['descripcion'];

    public function users()
    {
        return $this->hasMany(User::class, 'id_cargo');
    }
}
