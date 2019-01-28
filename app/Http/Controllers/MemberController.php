<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index(){
    	return view('admin.member');
    }

    public function add(){
    	return view('admin.add');
    }

    public function save(Request $r){
    	$m = new Member;
    	$m->nama = $r->input('nama');
    	$m->alamat = $r->input('alamat');
    	$m->no_identitas = $r->input('no_identitas');
    	if (Input::hasFile('foto')) {
            $file1 = $r->file('foto');
            $filename1 = $file1->getClientOriginalName();
            Input::file('foto')->move(storage_path('images'), $filename1);
            $m->foto = $filename1;
        }
        $m->save();
        return redirect(url('/admin/member'));
    }

	public function edit($id)
	{
		$m = Member::find($id);
		return view('admin.edit')->with('m', $m);
	}

	public function update(Request $r)
	{
		$m = Member::find($r->input('id'));
    	$m->nama = $r->input('nama');
    	$m->alamat = $r->input('alamat');
    	$m->no_identitas = $r->input('no_identitas');
    	if (Input::hasFile('foto')) {
            $file1 = $r->file('foto');
            $filename1 = $file1->getClientOriginalName();
            Input::file('foto')->move(storage_path('images'), $filename1);
            $m->foto = $filename1;
        }
        $m->save();
        return redirect(url('/admin/member'));		
	}

	public function delete($id)
	{
		$m = Member::find($id);
		$m->delete();
		return redirect(url('/admin/member'));
	}
}
