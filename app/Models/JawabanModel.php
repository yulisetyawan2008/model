<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function get_all(){
        $jawaban = DB::table('jawabans')->get();
        return $jawaban;
    }
    public static function save($data){
        // dd($data);
        $jawaban_baru = DB::table('jawabans')->insert($data);
        return $jawaban_baru;
    }

    public static function find_by_pertanyaan_id($id_pertanyaan){
        $item = DB::table('jawabans')->where('pertanyaan_id', $id_pertanyaan)->get();
        return $item;
    }

}
