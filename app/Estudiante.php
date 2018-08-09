<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $table = 'estudiante';
    protected $primaryKey = 'ci';
    public $timestamps = false;
    protected $fillable = ['paterno','materno','nombres','ci','idCarrera','telefono','email','nombreFoto'];
}
