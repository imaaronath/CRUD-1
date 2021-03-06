<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index()
    {
        $items = Jawaban::get_all();
        return view('items.jawaban')->with([
            'items' => $items
        ]);
    }

    public function store(Request $request)
    {
        Jawaban::save($request->all());
        return redirect('/jawaban');
    }
    public function show($pertanyaan_id)
    {
        $items = Jawaban::find_by_id($pertanyaan_id);
        return view('items.jawaban')->with([
            'items' => $items
        ]);
    }
    public function destroy($pertanyaan_id)
    {
        $deleted = Jawaban::destroy($pertanyaan_id);
        return redirect('/pertanyaan');
    }
}