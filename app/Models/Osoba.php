<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Racun;

class Osoba extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'tip',
        'email',
        'broj_telefona',
    ];

    public function racuni()
    {
        return $this->hasMany(Racun::class);
    }
}
