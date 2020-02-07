<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    protected $guarded = [''];

    public $timestamps = true;

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function class_time(){
        return $this->belongsTo(ClassTime::class);
    }
}
