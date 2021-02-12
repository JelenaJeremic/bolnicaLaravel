<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zakazivanje extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['ime', 'prezime', 'opis_problema','datum','lekar_id'];
}
