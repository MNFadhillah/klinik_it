<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
        /**
     * Menampilkan halaman login.
     *
     * @return \Illuminate\View\View
     */
    public function login()
    {
        return view('login');
    }
}
