<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Osoba;
use App\Models\Transakcija;

class Racun extends Model
{
    use HasFactory;

    protected $fillable = [
        'broj_racuna',
        'tip',
        'stanje',
        'osoba_id',
    ];

    public function osoba()
    {
        return $this->belongsTo(Osoba::class);
    }

    public function transakcije()
    {
        return $this->hasMany(Transakcija::class);
    }
}
