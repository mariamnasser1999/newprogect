<?php

namespace App\Http\Controllers;

 
class Testcontroller extends Controller
{
public function newtest()
{
    return view('index');
}




public function printname($Name ='defaultName')
{
    dd("welcome $Name jeus love you");
}


}