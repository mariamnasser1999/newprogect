<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $Myrequest)
    {
        // dd($Myrequest->all());       
        //  dd($Myrequest->input('age',20));
        // $data = $Myrequest ;
        // $data = $Myrequest->only('age','name');
        // $data = $Myrequest->except('age','name');
        //  dd($data);
    //    dd( $Myrequest->query('name'));
    // //     dd('llooooove');
    // return response()->json([
    //     'name' => 'mariam nasser'
    // ] );
    // return view('index');
    //  abort(404);
    //   return redirect()->route('printmyname');
    //   return redirect()->away('https://www.youtube.com/watch?v=cKIJRHUORUY');
    return redirect()->action([UserController::class, 'index']);
    }

    /**
     * Show the form for creating `a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
