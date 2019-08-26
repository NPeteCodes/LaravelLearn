<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicControl extends Controller
{
    public function home()
    {
      return view('welcome')->withTasks([
        'go to the store',
        'go to the market',
        'go to work',
        'go to the concert'
      ]);
    }
    public function about()
    {
      return view('about');
    }
    public function contact()
    {
      return view('contact');
    }
}
