<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';
    protected $primarykey = 'post_id';



    protected $title = 'title';
    protected $content = 'content';


    protected $fillable = [
        'title',
        'content'
    ];
}
