<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'nombre',
        'stock',
        'precio',
        'id_usuario',
    ];

    public function usuario(){
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function detalles(){
        return $this->hasMany(DetallePedido::class, 'id_producto');
    }
}
