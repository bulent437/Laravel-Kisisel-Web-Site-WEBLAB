<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\icerik;
use App\User;
use PhpParser\Node\Expr\FuncCall;

class blogController extends Controller
{
    public function home()
    {
        $icerikler = icerik::all();
        return view('home',compact('icerikler'));
    }
    public function hakkimda()
    {
        return view('hakkimda');
    }
    public function iletisim()
    {
        return view('iletisim');
    }
}
