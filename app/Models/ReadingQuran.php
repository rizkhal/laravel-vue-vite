<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReadingQuran extends Model
{
    protected $guarded = [];
    
    protected $table = 'bacaan_quran';
    
    protected $primaryKey = 'id_bacaan_quran';
}
