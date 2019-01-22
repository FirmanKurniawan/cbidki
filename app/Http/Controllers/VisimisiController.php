<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Visimisi;

class VisimisiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexvisimisi()
    {
    	return view('admin.index');
    }

    public function savevisi(Request $r)
    {
    	$l = new Visimisi;
    	$l->isi =	$r->input('isi');
    	$tipe = "1";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('admin'));
    }
    public function editvisi($id)
    {
    	$a = Visimisi::find($id);
    	return view('admin.visi.edit')->with('a',$a);
    }
    public function updatevisi(Request $r)
    {
    	$l = Visimisi::find($r->input('id'));
    	$l->isi = $r->input('isi');
    	$tipe = "1";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('admin'));
    }


    public function savemisi(Request $r)
    {
    	$l = new Visimisi;
    	$l->isi =	$r->input('isi');
    	$tipe = "2";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('admin'));
    }
    public function editmisi($id)
    {
    	$a =Visimisi::find($id);
    	return view('admin.misi.edit')->with('a',$a);
    }
    public function updatemisi(Request $r)
    {
    	$l = Visimisi::find($r->input('id'));
    	$l->isi = $r->input('isi');
    	$tipe = "2";
    	$l->tipe = $tipe;
    	$l->save();
    	return redirect(url('admin'));
    }


}
