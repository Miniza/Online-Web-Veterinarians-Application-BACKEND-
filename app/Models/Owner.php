<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;
    protected $table = 'ownertables';
    protected $fillable = [
        'oname',
        'osurname',
        'oidnumber',
        'ocellnum',
        'omail',
        'opostal',
    ];
}
