<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table 		= "news";
    protected $primaryKey 	= "id";
    public $timestamps 		= true;
    protected $fillable = [
        'title', 'description', 'content','picture','status',
    ];
}
