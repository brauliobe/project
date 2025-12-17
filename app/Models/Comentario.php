<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = ['contenido' , ' entrada_id', 'user_id'];

    public function entrada(){
        return $this->belongsTo(Entrada::class ,  'entrada_id');//muchos comentarios pueden pertenecer a una sola entrada
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class , 'usuario_id' ); //muchos comentarios pueden pertenecer a un solo usuario
    }
}
