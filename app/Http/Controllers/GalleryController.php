<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;
use App\Gallery2;
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
    	return redirect(url('admin/gallery'));
    }

    public function deletegallery($id)
    {
    	$gambar = Gallery::find($id);
    	$gambar->delete();
    	return redirect(url('admin/gallery'));
    }

    public function indexgallery2()
    {
        return view('admin.gallery2');
    }

    public function savegallery2(Request $r)
    {
        $n = new Gallery2;
      $n->pengantar1 = $r->input('pengantar1');
      $n->pengantar2 = $r->input('pengantar2');
      if(Input::hasFile('gambar')){
            $gambar = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('gambar')->getClientOriginalExtension();
            Input::file('gambar')->move(storage_path('images'),$gambar);
            $n->gambar = $gambar;
        }
        $n->save();
        return redirect(url('admin/gallery2'));
    }

    public function editgallery2($id)
    {
        $gallery2 = Gallery2::find($id);
        return view('admin.Fgallery2.edit')->with('gallery2',$gallery2);
    }

    public function updategallery2(Request $r)
    {
        $n = Gallery2::find($r->input('id'));
      $n->pengantar1 = $r->input('pengantar1');
      $n->pengantar2 = $r->input('pengantar2');
      if(Input::hasFile('gambar')){
            $gambar = date("YmdHis")
            .uniqid()
            ."."
            .Input::file('gambar')->getClientOriginalExtension();
            Input::file('gambar')->move(storage_path('images'),$gambar);
            $n->gambar = $gambar;
        }
        $n->save();
        return redirect(url('admin/gallery2'));
    }

    public function deletegallery2($id)
    {
        $gallery2 = Gallery2::find($id);
        $gallery2->delete();
        return redirect(url('admin/gallery2'));
    }

}
