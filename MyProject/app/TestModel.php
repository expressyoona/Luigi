<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    //
    public $timestamps = false;
    protected $table = 'Student';
    protected $cols = ['StudentName', 'Class'];
}
