<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lekar extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['ima', 'prezime', 'zvanje','biografija','iskustvo','specijalnost','obrazovanje','odeljenje_id'];
}
