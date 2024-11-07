<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //2
    protected $table = 'categories';
    protected $fillable = [
        'categoryName'
    ];

    use HasFactory;

    //5
    public function course(){
        return $this->hasMany(Course::class);
    }
}
