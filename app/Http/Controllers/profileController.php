<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;


class profilecontroller extends Controller
{
    public function mary(){
        $name = 'mary';
        return view('mary', ['name' => $name]);
    }

    public function budi(){
        $name = 'budi';
        return view('budi', ['name' => $name]);
    }
}
