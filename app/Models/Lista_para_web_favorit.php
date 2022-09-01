<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista_para_web_favorit extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $fillable = ['Marca', 'Nombre', 'Descripcion', 'CodigoProducto'];
    const CREATED_AT = 'Aud_Creado';
    const UPDATED_AT = 'Aud_Actualizado';
    protected $primarykey = 'IdProducto';    
}
