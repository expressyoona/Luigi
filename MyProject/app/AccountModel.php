<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountModel extends Model
{
  public $timestamps = false;
  protected $table = 'Account';
  protected $cols = ['Username', 'Email', 'Password', 'Fullname', 'Role', 'Address', 'Phone'];
}
