<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class themecontroller extends Controller
{
  function about()
  {
    return view('front.about');
  }


  function services()
  {
    return view('front.services');
  }

  function contact()
  {
    return view('front.contact');
  }

  function index()
  {
    return view('front.fronthome');
  }


  function store(Request $request)
  {
    $request->validate([
      'firstName' => 'required|string|min:4|max:10',
      'lastName' => ['required', 'min:4', 'string'],
      'email' => 'required|email',
      'message' => ['nullable'],
    ]);
    dd($request->all());
  }
}
