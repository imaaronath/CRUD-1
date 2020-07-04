<?php

namespace App\Http\Controllers;


use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function store(Request $request)
    {
        Pertanyaan::save($request->all());
        return redirect('/pertanyaan');
    }
    public function index()
    {
        $items = Pertanyaan::get_all();
        return view('pertanyaan.data')->with([
            'items' => $items
        ]);
    }
    public function create()
    {
        return view('pertanyaan.formpertanyaan');
    }
    public function show($id)
    {
        $item = Pertanyaan::find_by_id($id);
        return view('pertanyaan.detail')->with([
            'item' => $item
        ]);
    }

    public function edit($id)
    {
        $item =  Pertanyaan::find_by_id($id);
        return view('pertanyaan.edit')->with([
            'item'=>$item
        ]);
    }

    public function update($id,Request $request)
    {
        $item = Pertanyaan::update($id,$request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id)
    {
        $deleted = Pertanyaan::destroy($id);
        return redirect('/pertanyaan');
    }
}
