<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entrada extends Model
{
    use HasFactory;

    protected $table="entradas";
    protected $fillable = ['titulo','tag','contenido','user_id'];


    public function comentarios(){
        return $this->hasMany(Comentario::class); //hasMany indica una relacion de uno a muchos, es decir que una entrada puede tener muchos comentarios
    }

    public function usuario(){
        return $this->belongsTo(User::class ,  'user_id'); //belongsTo es la relacion invera de uno a muchos, quiere decir que muchas entradas pueden pertencer a un solo usuario
    }
}
