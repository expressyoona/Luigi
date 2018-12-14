<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use Illuminate\Support\Facades\DB;

use App\Menu;
use App\AccountModel;
use File;

class AdminController extends Controller
{
    public function Show() {
      $food_quantity = DB::table('Menu')->count();
      return view('Admin', compact('food_quantity'));
    }

    function AddFood() {
      return view('AddFood');
    }

    function AddNewFood(Request $req) {
      $model = new Menu;
      $model->FoodName = $req->FoodName;
      $model->Price = $req->Price;
      $model->Description = $req->Description;
      if ($req->Image) {
        $file = $req->file('Image');
        $model->Image = $file->getClientOriginalName();
        $file->move(public_path().'/images', $file->getClientOriginalName());
      }

      $model->save();
      return redirect()->route('Admin')->with(['flash_level'=>'success', 'flash_message'=>'Added success!']);
    }

    function ShowFood() {
      $food_list = Menu::select('MenuID', 'FoodName', 'Price', 'Type', 'Image', 'Description')->get()->toArray();
      $i = 0;
      return view('ShowFood', compact('food_list', 'i'));
    }

    function showEditFood($ID) {
      $food = Menu::select('MenuID', 'FoodName', 'Price', 'Type', 'Image', 'Description')->where('MenuID', $ID)->get()->first();
      $types = ['Pizza', 'Pasta', 'Beverage', 'Other'];
      return view('EditFood', compact('food', 'types'));
    }

    function updateFood(Request $res, $id) {
      $query = array();
      $query['FoodName'] = $res->foodName;
      $query['Price'] = $res->foodPrice;
      $query['Type'] = $res->foodType;
      $query['Description'] = $res->foodDescription;
      if ($res->foodImage) {
        $file = $res->file('foodImage');
        $query['Image'] = $file->getClientOriginalName();
        if (file_exists(public_path().'/images/'.$file->getClientOriginalName())) {
          File::delete(public_path().'/images/'.$file->getClientOriginalName());
        }
        $file->move(public_path().'/images', $file->getClientOriginalName());
      }
      DB::table('Menu')->where('MenuID', $id)->update($query);
      return redirect()->route('Admin')->with(['flash_level'=>'success', 'flash_message'=>'Food updated successfully!']);
    }

    function deleteFood($id) {
      DB::table('Menu')->where('MenuID', $id)->delete();
      return redirect()->route('Admin')->with(['flash_level'=>'success', 'flash_message'=>'Food deleted successfully!']);
    }

    function showUser() {
      $users = AccountModel::select('UserID', 'Fullname', 'Email', 'Role', 'Address', 'Phone')->orderby('Role')->get()->toArray();
      return view('ShowUser', compact('users'));
    }

    function updateUser(Request $req, $id) {
      $updates = array();
      $updates['Fullname'] = $req->userFullname;
      //return $updates['Fullname'];
      $updates['Email'] = $req->userEmail;
      //return $updates;
      $updates['Role'] = $req->userRole;
      $updates['Address'] = $req->userAddress;
      $updates['Phone'] = $req->userPhone;
      DB::table('Account')->where('UserID', $id)->update($updates);
      return redirect()->route('Admin')->with(['flash_level'=>'success', 'flash_message'=>'User updated successfully!!!']);
    }

    function deleteUser(Request $res, $id) {
      DB::table('Account')->where('UserID', $id)->delete();
      return redirect()->route('Admin')->with(['flash_level'=>'success', 'flash_message'=>'User deleted successfully!!!']);
    }

    function addUser(Request $req) {
      $user = new AccountModel;
      $user->Username = $req->userName;
      $user->Fullname = $req->userFullname;
      $user->Password = md5($req->userPassword);
      $user->Email = $req->userEmail;
      $user->Role = $req->userRole;
      $user->Address = $req->userAddress;
      $user->Phone = $req->userPhone;
      $user->save();
      return redirect()->route('Admin')->with(['flash_level'=>'success', 'flash_message'=>'User added successfully!!!']);
    }

}
