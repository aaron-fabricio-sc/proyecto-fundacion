<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesore extends Model
{
    protected $guarded;

    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nota()
    {
        return $this->hasOne(Nota::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }
}
