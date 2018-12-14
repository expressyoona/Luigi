<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\AccountModel;
use Cookie;

class AccountController extends Controller
{
    function Verify(Request $request) {

      $username = $request->User;
      $password = $request->Pw;
      $account = AccountModel::select('Password', 'Email', 'Role')->where('Username', $username)->orWhere('Email', $username)->get()->first();
      if ($account['Password'] == md5($password)) {
        //session(['Username' => $username]);
        //session(['Role' => $account['Role']]);
        if ($request->rememberme) {
            Cookie::queue('Username', $username, 60 * 24);
            Cookie::queue('Email', $account['Email'], 60 * 24);
            Cookie::queue('Role', $account['Role'], 60 * 24);
        }
        return view('index');
      }
      else {
        return response('Your username or password is incorrect!');
      }
    }
}
