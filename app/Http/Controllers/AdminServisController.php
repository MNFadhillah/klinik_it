<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminServisController extends Controller
{
    public function instalasiSoftware()
        {
            return view('admin/servis/instalasi-software');
        }

        public function instalasiJaringan()
        {
            return view('admin/servis/instalasi-jaringan');
        }

        public function serviceKomputer()
        {
            return view('admin/servis/service-komputer');
        }

        public function serviceLaptop()
        {
            return view('admin/servis/service-laptop');
        }

        public function perakitanInstalasiKomputer()
        {
            return view('admin/servis/perakitan-instalasi-komputer');
        }
        public function daftarChat()
        {
            return view('admin/servis/daftar-chat');
        }
}