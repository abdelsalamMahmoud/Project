<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'awards';
    protected $fillable = [
        'details',
    ];

    protected $hidden = [];

    public $timestamps = false;

    public function scopeSelection($query){
        return $query->select('id','details');
    }
}
