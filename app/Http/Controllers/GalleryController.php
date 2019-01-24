<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use Hash;

class GalleryController extends Controller
{
	public function indexgallery()
	{
		return view('admin.gallery');
	}

    public function addgallery()
    {
    	return view('admin.gallery.add');
    }

    public function savegallery(Request $r)
    {
    	$n = new Gallery;
    	 if (Input::hasFile('gambar')) {
      $files = Input::file('gambar');
      foreach($files as $gambar) {
        $gambar2 = date("YmdHis").uniqid()."."
        .$gambar->getClientOriginalExtension();
        $gambar->move(storage_path('images'), $gambar2);
        Gallery::create([
            'gambar' => $gambar2,
          ]);
    }  
    }
    	return redirect(url('admin.gallery'));
    }

    public function deletegallery($id)
    {
    	$gambar = Gallery::find($id);
    	$gambar->delete();
    	return redirect(url('admin.gallery'));
    }
}
