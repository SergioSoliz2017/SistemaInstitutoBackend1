<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;
    protected $table="tutor";
    protected $primaryKey="CODTUTOR";
    protected $fillable = [
    "CODTUTOR",
    "NOMBRETUTOR",
    "APELLIDOTUTOR",
    "FECHANACIMIENTOTUTOR",
    "CELULARTUTOR",
    "GENEROTUTOR"
    ];
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    public function estudiantes()
    {
        return $this->belongsToMany(Estudiante::class, 'relationship_1', 'CODTUTOR', 'CODESTUDIANTE');
    }
}
