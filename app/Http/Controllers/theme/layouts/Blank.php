<?php

namespace App\Http\Controllers\theme\layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Blank extends Controller
{
  public function index()
  {
    return view('content.layouts-example.layouts-blank');
  }
}
