<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepagecontroller extends Controller
{
    //
    public function index()
    {
        return view('homepage.index');
    }

    public function index2()
    {
        return view('homepage.users');
}
public function index3()
{
    return view('homepage.adminlogin');
}

public function index4(Request $request)
{
return view('adminpage.admin')  ;
return redirect()->route('admin');

}

}
