<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\icerik;
use App\User;
use PhpParser\Node\Expr\FuncCall;
class panel extends Controller
{

    public function yetkiguncelle($id)
    {
        $user=User::find($id);
        $user->yetki=request()->input('yetki');
        $user->save();
        $kullanicilar=User::all();
        $icerikler=icerik::all();
        return view('adminpaneli',compact('kullanicilar','icerikler'));
    }
    public function kullanicisil($id)
    {
        $user=User::find($id);
        $user->delete($id);
    }
    public function adminpanel()
    {
        $kullanicilar=User::all();
        $icerikler=icerik::all();
        return view('adminpaneli',compact('kullanicilar','icerikler'));
    }
    public function duyuruekle()
    {
        return view('duyuruekle');
    }
    public function duyuruyuekle()
    {
        $icer=new icerik;
        $icer->baslik=request('baslik');
        $icer->yazi=request('yazi');
        $icer->save();
        $icerikler=icerik::all();
        return view('duyurugoruntule',compact('icerikler'));
    }
    public function duyurugoruntule()
    {
        $icerikler=icerik::all();
        return view('duyurugoruntule',compact('icerikler'));
    }
    public function duyuruyusil($id)
    {
        $icer=icerik::find($id);
        $icer->delete($id);
        $icerikler=icerik::all();
        return view('duyurugoruntule',compact('icerikler'));
    }
    
}
