<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ControlCred extends Model
{
    protected $table = 'control_cred';
    protected $primaryKey = 'ci';
    public $timestamps = false;
    protected $fillable = ['ci','fecha','hora'];
}
