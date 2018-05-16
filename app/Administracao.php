<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Venturecraft\Revisionable\RevisionableTrait;

class Administracao extends Model
{
    protected $table = 'administracao';
    protected $fillable = [
        'nome', 'quantidade', 'inicio','fim'
    ];

    public static function boot()
    {
        parent::boot();
    }
}
