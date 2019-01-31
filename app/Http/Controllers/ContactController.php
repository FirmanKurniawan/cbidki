<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
   public function index()
   {
      	$contact = Contact::all();
   		return view('admin.contact')->with('contact', $contact);
   }
    public function save(Request $r)
    {
    	$t = new Contact;
    	$t->nama = $r->input('nama');
    	$t->email = $r->input('email');
    	$t->subject = $r->input('subject');
    	$t->pesan = $r->input('pesan');
    	
    	$t->save();
      return redirect()->back();
    }

    public function delete($id)
    {
    	$nama = Contact::find($id);
    	$nama->delete();
      return redirect(url('admin/contact'));
    }
}
