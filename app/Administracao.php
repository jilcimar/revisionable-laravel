<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Venturecraft\Revisionable\Revisionable;
use \Venturecraft\Revisionable\RevisionableTrait;

class Administracao extends Revisionable
{
    protected $revisionEnabled = true;
   // protected $historyLimit = 500; //Interromper as reviões depois de 500 alterações

    //Especificando quais campos deseja não rastrear
    protected $dontKeepRevisionOf = array(
        'fim'
    );

    protected $table = 'administracao';
    protected $fillable = [
        'nome', 'quantidade', 'inicio','fim'
    ];

    public static function boot()
    {
        parent::boot();
    }
}
