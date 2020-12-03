<?php

namespace App\Http\Controllers;
use App\TestModel;
use App\Menu;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class TestController extends Controller
{
    //
    function index() {

      $data = TestModel::select('ID', 'StudentName', 'Class')->get()->toArray();
      return view('View', compact('data'));

      //$best_seller = Menu::select('MenuID', 'FoodName', 'Price', 'Image')->limit(4)->toArray();
    }

    function Contact() {
      return view('Contact');
    }

    function Blog() {
      return view('Blog');
    }

    function Menu() {
      return view('Menu');
    }

    function AboutUs() {
      return view('AboutUs');
    }

    public function add() {
      return view('Add');
    }

    public function AddStudent(Request $Request) {
      $model = new TestModel;
      //Model attribute = Request is form attribute

      $model->StudentName = $Request->Name;
      $model->Class = $Request->Class;
      $model->save();
      return redirect()->route('home')->with(['flash_level'=>'success', 'flash_message'=>'Insert success!']);
    }

    public function getStudent($id) {
      $field = TestModel::select('ID', 'StudentName', 'Class')->where('ID', $id)->first();
      $col = TestModel::findOrFail($id)->toArray();
      return view('Edit', compact('field','col'));
    }

    public function EditStudent(Request $Request, $id) {
      $model = TestModel::find($id);

      $model->StudentName = $Request->Name;
      $model->Class = $Request->Class;
      DB::table('Student')->where('id',$id)->update(['StudentName' => $Request->Name, 'Class' => $Request->Class]);
      return redirect()->route('home')->with(['flash_level'=>'success', 'flash_message'=>'Updated success!']);
    }

    public function DeleteStudent(Request $Request, $id) {
      DB::table('Student')->where('ID', $id)->delete();
      return redirect()->route('home')->with(['flash_level'=>'success', 'flash_message'=>'Deleted success!']);
      // $field = TestModel::select('ID', 'StudentName', 'Class')->where('ID', $id)->first();
      // $col = TestModel::findOrFail($id)->toArray();
      // return view('Delete', compact('field','col'));
    }

    function Footer() {
      return view('Footer');
    }

    function Header() {
      return view('Header');
    }

    function SignIn() {
      return view('SignIn');
    }
}
