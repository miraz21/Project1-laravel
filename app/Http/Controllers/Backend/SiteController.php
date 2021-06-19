<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function home()
  {
  	return view('pages.home');
  }

  public function about()
  {
  	return view('pages.about');
  }

  public function feature()
  {
  	return view('pages.features');
  }

    public function service()
  {
    return view('pages.service');
  }
  
    public function contact()
  {
    return view('pages.contact');
  }

}
