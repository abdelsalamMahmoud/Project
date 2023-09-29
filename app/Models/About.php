<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'about';
    protected $fillable = [
        'name', 'address', 'email','about',
    ];

    protected $hidden = [];

    public $timestamps = false;

    public function scopeSelection($query){
        return $query->select('id','name','address','email','about');
    }

}
