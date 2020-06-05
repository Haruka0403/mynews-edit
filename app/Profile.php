<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = array('id');
    //
    public static $rules = array(
      'title1' => 'required',
      'title2' => 'required',
      'title3' => 'required',
      'body' => 'required',
  );
}
