<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //

    public $table = "tasks";
    protected $fillable = [
        'title' ,
        'description' ,
        'complete_at' ,
    ];


    public function isCompleted(){
        return $this -> complete_at == null;
    }
}
