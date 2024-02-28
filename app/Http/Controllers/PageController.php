<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
    }

    public function about() {
        return 'NIM : 2241720191' . '<br>' . 'Nama : Cahyo Adi Prasetia';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}
