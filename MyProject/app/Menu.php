<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public $timestamps = false;
    protected $table = 'Menu';
    protected $cols = ['MenuID', 'FoodName', 'Price', 'Type', 'Description', 'Image'];
}
