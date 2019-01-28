<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use \App\User;
use Auth;
use Hash;

class UserController extends Controller
{
    public function index()
    {
    	$user = User::where('id', Auth::user()->id)->first();
        return view('admin.user.index',compact('user'));
    }

    public function add()
    {
    	return view('admin.user.add');
    }

    public function save(Request $r)
    {
    	$n = new User;
        $n->name = $r->input('name');
        $n->email = $r->input('email');
        $n->password = bcrypt($r->input('password'));
        $n->save();
        return redirect(url('admin/user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit')->with('user',$user);
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(url('admin/user'));
    }

    public function update(Request $r)
    {
    		$a = \App\User::find($r->input('id'));
    		$name = $r->name;
    		$email = $r->email;
		    if (Hash::check(Input::get('oldpw'), $a['password']) && Input::get('newpw') == Input::get('confnewpw')) {
		      $a->password = bcrypt(Input::get('newpw'));
		      $a->name = $name;
		      $a->email = $email;
		      $a->save();
		      return redirect('admin/user')->with('alert', 'Berhasil');
		    }else {
		      return redirect('admin/user')->with('alert', 'Oops .. Password yang anda masukan tidak sesuai');
		    }
    }
}
