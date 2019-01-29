<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Footer;

class FooterController extends Controller
{
    public function index()
    {
        $data = \App\Footer::where('id',1)->first();
        return view('admin.footer')->with('data',$data);
    }

    public function update(Request $r)
    {
        $data = \App\Footer::find(1);
        $data->pengantar1 = $r->pengantar1;
        $data->pengantar2 = $r->pengantar2;
        $data->pengantar3 = $r->pengantar3;
        $data->save();
        return redirect(url('admin/footer'));
    }
}
