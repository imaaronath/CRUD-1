<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function get_all()
    {
        $items = DB::table('jawaban')
                    // ->leftjoin('jawaban','pertanyaan.id','=','jawaban.pertanyaan_id')
                    ->get();
        return $items;
    }
    public static function save($data)
    {
        unset($data['_token']);
        $new_item = DB::table('jawaban')->insert($data);
        return $new_item;
    }

    public static function find_by_id($pertanyaan_id)
    {
        $item = DB::table('jawaban')->where('pertanyaan_id',$pertanyaan_id)->first();
        return $item;
    }
    public static function destroy($id)
    {
        $deleted = DB::table('jawaban')
                        ->where('id',$id)
                        ->delete();
        return $deleted;
    }
}
