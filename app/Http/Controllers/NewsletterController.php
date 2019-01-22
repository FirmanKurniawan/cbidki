<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index()
   {
   	return view('admin.newsletter.index');
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
