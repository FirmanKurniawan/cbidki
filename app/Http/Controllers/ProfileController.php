<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Profile;
class ProfileController extends Controller
{
    public function all()
    {
    	$profile = Profile::where('id', 1)->first();
    	return view('layouts.layouts-admin', compact('profile'));
    }

    public function update(Request $r)
    {
        $id = $r->id;
    	$nama = $r->nama;
    	$alamat = $r->alamat;
    	$telepon = $r->telepon;
    	$email = $r->email;
    	$fanspage = $r->fanspage;
    	$pengantar1 = $r->pengantar1;
    	$pengantar2 = $r->pengantar2;
    	$pengantar3 = $r->pengantar3;

    	$profile = Profile::find(1);
    	$profile->nama = $nama;
    	$profile->alamat = $alamat;
    	$profile->telepon = $telepon;
    	$profile->email = $email;
    	$profile->fanspage = $fanspage;
    	$profile->pengantar1 = $pengantar1;
    	$profile->pengantar2 = $pengantar2;
    	$profile->pengantar3 = $pengantar3;
    	$profile->save();

    	return redirect(url('/'));
    }
}
