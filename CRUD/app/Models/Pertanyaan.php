<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class Pertanyaan
{
    public static function get_all()
    {
        $items = DB::table('pertanyaan')->get();
        return $items;
    }
    public static function save($data)
    {
        unset($data['_token']);
        $new_item = DB::table('pertanyaan')->insert($data);
        return $new_item;
    }
}
