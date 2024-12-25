<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Singlecontroller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        dd('helllo ahmed');
    }
}
