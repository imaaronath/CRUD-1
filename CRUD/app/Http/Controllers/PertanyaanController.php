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
        return view('items.data')->with([
            'items' => $items
        ]);
    }
    public function create()
    {
        return view('items.formpertanyaan');
    }

}
