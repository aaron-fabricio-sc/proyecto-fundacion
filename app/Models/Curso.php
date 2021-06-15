<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{

    protected $guarded;
    public function getRouteKeyName()
    {
        return "slug";
    }
    use HasFactory;
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function profesore()
    {
        return $this->hasOne(Profesore::class);
    }

    public function estudiante()
    {
        return $this->hasOne(Estudiante::class);
    }

    public function nota()
    {
        return $this->hasOne(Nota::class);
    }
}
