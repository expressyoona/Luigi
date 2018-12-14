<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogModel;
use App\AccountModel;
use Illuminate\Contracts\Support\Jsonable;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    function index() {
      $blog_list = BlogModel::select('BlogID', 'Cover', 'Title', 'Content', 'TimePublish')->get()->toArray();
      return view('Blog', compact('blog_list'));
    }

    function Pagination() {
      $per_page = 3;
      $blog_list = DB::table('Blog')
                  ->join('Account', 'Account.UserID', '=', 'Blog.UserID')
                  ->select('Cover', 'Title', 'Content', 'TimePublish', 'Fullname')
                  ->orderby('TimePublish', 'DESC')
                  ->paginate($per_page);
      return view('Blog', compact('blog_list'));
    }
}
