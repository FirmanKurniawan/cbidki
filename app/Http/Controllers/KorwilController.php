<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Korwil;
use App\Korwilmember;
use Hash;

class KorwilController extends Controller
{
    public function indexkorwil()
    {
    	return view('admin.Fkorwil.korwil');
    }

    public function addkorwil()
    {
    	return view('admin.Fkorwil.add');
    }

    public function savekorwil(Request $r)
    {
    	$n = new Korwil;
    	$n->nama = $r->input('nama');
    	$n->keterangan = $r->input('keterangan');
    	if(Input::hasFile('logo')){
            $logo = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('logo')->getClientOriginalExtension();
            Input::file('logo')->move(storage_path('images'),$logo);
            $n->logo = $logo;
        }
        $n->save();
        return redirect(url('admin/korwil'));
    }

    public function editkorwil($id)
    {
    	$korwil = Korwil::find($id);
    	return view('admin.Fkorwil.edit')->with('korwil',$korwil);
    }

    public function updatekorwil(Request $r)
    {
    	$u = Korwil::find($r->input('id'));
    	$u->nama = $r->input('nama');
    	$u->keterangan= $r->input('keterangan');
    	if(Input::hasFile('logo')){
            $logo = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('logo')->getClientOriginalExtension();
            Input::file('logo')->move(storage_path('images'),$logo);
            $u->logo = $logo;
        }
        $u->save();
        return redirect(url('admin/korwil'));
    }

    public function deletekorwil($id)
    {
    	$korwil = Korwil::find($id);
    	$korwil->delete();
    	return redirect(url('admin/korwil'));
    }

	public function indexkorwilmember()
    {
    	return view('admin.Fkorwilmember.korwilmember');
    }

    public function addkorwilmember()
    {
    	return view('admin.Fkorwilmember.add');
    }

    public function savekorwilmember(Request $r)
    {
    	$n = new Korwilmember;
        $n->idkorwil = $r->input('idkorwil');
    	$n->nama = $r->input('nama');
    	$n->kode = $r->input('kode');
    	if(Input::hasFile('logo')){
            $logo = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('logo')->getClientOriginalExtension();
            Input::file('logo')->move(storage_path('images'),$logo);
            $n->logo = $logo;
        }
        $n->save();
        return redirect(url('admin/korwil2'));
    }

    public function editkorwilmember($id)
    {
    	$korwil2 = Korwilmember::find($id);
    	return view('admin.Fkorwilmember.edit')->with('korwil2',$korwil2);
    }

    public function updatekorwilmember(Request $r)
    {
    	$u = KorwilMember::find($r->input('id'));
    	$u->nama = $r->input('nama');
    	$u->kode = $r->input('kode');
    	if(Input::hasFile('logo')){
            $logo = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('logo')->getClientOriginalExtension();
            Input::file('logo')->move(storage_path('images'),$logo);
            $u->logo = $logo;
        }
        $u->save();
        return redirect(url('admin/korwil2'));
    }

    public function deletekorwilmember($id)
    {
    	$korwil2 = Korwilmember::find($id);
    	$korwil2->delete();
    	return redirect(url('admin/korwil2'));
    }

}
