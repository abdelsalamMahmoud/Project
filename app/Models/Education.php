<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';
    protected $fillable = [
        'degree', 'uni', 'collage','GPA','start_date','end_date',
    ];

    protected $hidden = [];

    public $timestamps = false;

    public function scopeSelection($query){
        return $query->select('id','degree','uni','collage','GPA','start_date','end_date');
    }
}
