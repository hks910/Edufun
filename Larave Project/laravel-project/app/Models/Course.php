<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //2
    protected $table = 'courses';
    protected $fillable = [
        'name',
        'category_id',
        'writer_id',
        'detail',
        'image',
    ];
    
    //5
      public function category(){
        return $this->belongsTo(Category::class);
      }

      public function writer(){
        return $this->belongsTo(Writer::class);
      }




}
