<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table="registro";
    protected $primaryKey="CODINSCRIPCION";
    protected $fillable = [
    "CODTRABAJADOR",
    "FECHAINSCRIPCION",
    "TIEMPOINSCRIPCION",
    "COSTOINSCRIPCION"];

    public $timestamps = false;
}