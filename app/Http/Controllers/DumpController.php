<?php

namespace App\Http\Controllers;

// use App\Media;
// use App\Post;
// use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

use App\Dump;

class DumpController extends Controller
{
  public function dump($slug)
  {
    $func = 'dump'.title_case($slug);
    $this->{$func}();
  }

  public function dumpPosts()
  {

  }

  public function getPages()
  {
    return DumpPost::pages();
  }
}
