<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table='inventarios'; 
    protected $fillable = ['categoria_id', 'subcategoria_id', 'nombre', 'cantidad_final', 'sucursal_id'];
    public function sucursal()
    {
        return $this->belongsTo(Almacenes::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class);
    }
}
