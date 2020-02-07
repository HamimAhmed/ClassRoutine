<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassTime extends Model
{
    protected $guarded = [''];

    public $timestamps = true;

    public function routines(){
        return $this->hasMany(Routine::class);
    }
}
