<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Venturecraft\Revisionable\RevisionableTrait;

class Administracao extends Model
{
    protected $revisionEnabled = true;
    protected $historyLimit = 500; //Interromper as reviões depois de 500 alterações

    protected $table = 'administracao';
    protected $fillable = [
        'nome', 'quantidade', 'inicio','fim'
    ];

    public static function boot()
    {
        parent::boot();
    }
}
