<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    use HasFactory;

    public function provincia(){
        return $this->belongsTo(Provincia::class, 'id_provincia');
    }
}
