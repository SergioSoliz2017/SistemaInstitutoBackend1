<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table="estudiante";
    protected $primaryKey="CODESTUDIANTE";
    protected $fillable = [
    "CODESTUDIANTE",
    "NOMBREESTUDIANTE",
    "APELLIDOESTUDIANTE",
    "FECHANACIMIENTOESTUDIANTE",
    "GENEROESTUDIANTE",
    "DIRECCION",
    "COLEGIO",
    "TURNO",
    "CURSO",
    "TIPOCOLEGIO"
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

    public function tutores()
    {
        return $this->belongsToMany(Tutor::class, 'relationship_1', 'CODESTUDIANTE', 'CODTUTOR');
    }
}