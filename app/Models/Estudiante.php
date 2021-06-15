<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $guarded;
    public function user()
    {
        return $this->belongsTo(User::class);
    }




    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function nota()
    {
        return $this->hasMany(Nota::class);
    }
}
