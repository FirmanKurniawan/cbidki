<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Merchandise;

class MerchandiseController extends Controller
{
    public function index()
    {
    	return view('admin.merchandise');
    }

    public function savemerchandise(Request $r)
    {
    	$t = new Merchandise;

    	$t->logo = $r->input('logo');
        $file = $r->file('logo');
        $filename = $file->getClientOriginalName();
        $r->file('logo')->move("picture1/", $filename);
        $t->logo = $filename;

    	$t->nama = $r->input('nama');
    	$t->deskripsi = $r->input('deskripsi');
    	
    	$t->save();
    	return redirect(url('admin/merchandise'));
    }

    public function editmerchandise($id)
    {
    	$merchandise = Merchandise::find($id);
    	return view('admin.merchandise.edit')->with('merchandise',$merchandise);
    }
    public function updatemerchandise(Request $m)
    {
    	$s = Merchandise::find($m->input('id'));

    	$file = $m->file('logo');
        $filename = $file->getClientOriginalName();
        $m->file('logo')->move("picture1/", $filename);
        $s->logo = $filename;

    	$s->nama = $m->input('nama');
    	$s->deskripsi = $m->input('deskripsi');
        
    	$s->save();
    	return redirect(url('admin/merchandise'));
    }
    public function deletemerchandise($id)
    {
    	$nama = Merchandise::find($id);
    	$nama->delete();
    	return redirect(url('admin/merchandise'));
    }
}
