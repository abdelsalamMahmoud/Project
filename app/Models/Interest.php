<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $table = 'interests';
    protected $fillable = [
        'details',
    ];

    protected $hidden = [];

    public $timestamps = false;

    public function scopeSelection($query){
        return $query->select('id','details');
    }
}
