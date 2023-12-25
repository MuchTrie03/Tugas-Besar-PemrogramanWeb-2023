<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function halaman_user()
    {
        return view('user.user');
    }
    public function halaman_chekout()
    {
        return view('user.chekout');
    }
}
