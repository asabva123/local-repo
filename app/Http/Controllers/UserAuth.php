<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function userLogin(Request $request)
    {
        $data =  $request->input('user');
        $request->session()->put('user',$data);
        
        return redirect('profile');
    }
}
