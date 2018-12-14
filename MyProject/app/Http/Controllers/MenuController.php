<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;

class MenuController extends Controller
{
    function index() {
      $menu_list = Menu::select('MenuID', 'FoodName', 'Price', 'Description', 'Image')->limit(10)->get()->toArray();
      return view('Menu', compact('menu_list'));
    }
}
