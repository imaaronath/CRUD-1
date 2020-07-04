<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function get_all()
    {
        $items = DB::table('pertanyaan')
                    ->leftjoin('jawaban','pertanyaan.id','=','jawaban.pertanyaan_id')
                    ->get();
        return $items;
    }
    public static function save($data)
    {
        unset($data['_token']);
        $new_item = DB::table('jawaban')->insert($data);
        return $new_item;
    }
}
