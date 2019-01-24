<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery2 extends Model
{
    protected $table ='gallery2s';
    protected $fillable = [
    'pengantar1',
    'pengantar2',
    'gambar',
    ];
}
