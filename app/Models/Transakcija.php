<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Racun;

class Transakcija extends Model
{
    use HasFactory;

    public function racun()
    {
        return $this->belongsTo(Racun::class);
    }
}
