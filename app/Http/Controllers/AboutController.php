<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        return 'NIM : 2241720191' . '<br>' . 'Nama : Cahyo Adi Prasetia';
    }
}
