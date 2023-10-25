<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TablaSensor extends Model
{
    use HasFactory;

    protected $table = 'tabla_sensor';

    public function temperatura()
    {
        return $this->hasOne(Temperatura::class, 'fecha_hora', 'fecha_hora');
    }

    public function humedadAmbiente()
    {
        return $this->hasOne(HumedadAmbiente::class, 'fecha_hora', 'fecha_hora');
    }

    public function estadoTierra()
    {
        return $this->hasOne(EstadoTierra::class, 'fecha_hora', 'fecha_hora');
    }

    public function flujoAgua()
    {
        return $this->hasOne(FlujoAgua::class, 'fecha_hora', 'fecha_hora');
    }
}

class EstadoTierra extends Model
{
    public function controlRiego()
    {
        return $this->hasOne(ControlRiego::class);
    }

}



