<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

        class Article extends Model
        {
            //2
            protected $table = 'articles';
            protected $fillable = [
                'title',
                'content',
                'writerId',
                'views',
                'image'
            ];
            //5
            public function writer(){
                return $this->belongsTo(Writer::class);
            }

            use HasFactory;
        }
