<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    public $timestamps = false;
    protected $table = 'Blog';
    protected $cols = ['BlogID', 'Cover', 'UserID', 'Title', 'Content', 'TimePublish'];
}
