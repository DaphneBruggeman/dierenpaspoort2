<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'naam',
        'geboortedatum',
        'soort',
        'geslacht',
        'kleur',
        'locatie',
        'eten',
        'weetje',
        'foto',
        'qr_code',
    ];
}
