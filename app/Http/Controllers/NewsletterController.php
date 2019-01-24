<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Newsletter;

class NewsletterController extends Controller
{
    public function index()
   {
      $newsletter = Newsletter::all();
   	return view('admin.newsletter')->with('newsletter', $newsletter);
   }

   public function delete($id)
   {
      $newsletter = Newsletter::find($id);
      $newsletter->delete();
      return redirect(url('admin/newsletter'));
   }

   public function save(Request $r)
   {
      $email = $r->email;
      $newsletter = new Newsletter;
      $newsletter->email = $email;
      $newsletter->save();

      return redirect()->back();
   }
}
