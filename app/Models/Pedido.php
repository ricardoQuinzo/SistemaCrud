<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function detalles(){
        return $this->hasMany(DetallePedido::class, 'id_pedido');
    }
}
