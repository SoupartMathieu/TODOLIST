<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    //permettera d'afficher la table !?
protected $table = 'tasks';

    public $timestamps=true;
    protected $fillable=['id','user_id','name','descriptionTache','fini'];
}
