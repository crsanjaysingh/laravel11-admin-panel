<?php

namespace App\Http\Controllers\theme\layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Container extends Controller
{
  public function index()
  {
    return view('content.layouts-example.layouts-container');
  }
}
