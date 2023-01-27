<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Alquiler extends Model
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'valor_pelicula',
        'fecha_inicio',
        'fecha_fin',
        'user_id',
        'pelicula_id'
    ];

    // public function peliculas(){
    //     return $this->hasMany(Pelicula::class);
    // }
}
