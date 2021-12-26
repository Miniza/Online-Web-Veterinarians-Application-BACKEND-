<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pets extends Model
{
    use HasFactory;
    protected $table ='pettable';
    protected $fillable = [
      'pname',
      'pid',
      'ptype',
      'pbreed',
      'powner',
      'oidnumber',
      'pdob',  
    ];

}
