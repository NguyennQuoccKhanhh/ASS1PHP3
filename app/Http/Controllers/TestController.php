<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function index(){
        return view('client.index');
    }
    function chitiet(){
        return view('client.chitiet');
    }
    function lienhe(){
        return view('client.lienhe');
    }
    function listdanhsach(){
        return view('client.listdanhsach');
    }
}
