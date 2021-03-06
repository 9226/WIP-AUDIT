<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusRisks extends Model 
{

    protected $table = 'statusRisk';
    public $timestamps = true;
    protected $fillable = array('libelle', 'valeur');

    public function vulnerabilite()
    {
        return $this->belongsToMany('App\Vulnerabilites');
    }

}