<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = 'experience';
    protected $fillable = [
        'title', 'company', 'details','start_date','end_date',
    ];

    protected $hidden = [];

    public $timestamps = false;

    public function scopeSelection($query){
        return $query->select('id','title','company','details','start_date','end_date');
    }
}
