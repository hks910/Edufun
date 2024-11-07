<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //2
    protected $table = 'Writers';
    protected $fillable = [
        'writerName',
        'image',
        'speciality'
    ];
    use HasFactory;

    //5
    public function courses(){
        return $this->hasMany(Course::class);
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }
}
