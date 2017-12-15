<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
  public function about() {
    $first_name = "Luke";
        $last_name = "Skywalker";

        return view('about', compact('first_name', 'last_name'));
    }
    public function contact()
      {
        return view("contact");
      }
    //
}
