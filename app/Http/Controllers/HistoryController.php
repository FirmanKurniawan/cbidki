<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class HistoryController extends Controller
{
    public function index()
    {
    	$data = History::where('id',1)->first();
        return view('admin.history')->with('data',$data);
    }

    public function update(Request $r)
    {
    	$data = History::find(1);
    	$data->history = $r->history;
    	$data->save();
    	return redirect(url('admin/history'));
    }
}
