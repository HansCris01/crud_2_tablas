<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    use HasFactory;
    protected $table = 'documentos';
    protected $primaryKey='codigo_documento';
    protected $fillable=[
    'codigo_documento',
    'descripcion',
    'estado',
    ];
}
