<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function get_all(){
        $pertanyaan = DB::table('pertanyaans')->get();
        return $pertanyaan;
    }

    public static function save($data){
        $new_pertanyaan = DB::table('pertanyaans')->insert($data);
        return $new_pertanyaan;
    }

    public static function find_by_id($id){
        $item = DB::table('pertanyaans')->where('id', $id)->first();
        return $item;
    }

    public static function update($id, $request){
        // dd($request);
        $pertanyaan = DB::table('pertanyaans')
                        ->where('id', $id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                            'tanggal_dibuat' =>$request["tanggal_dibuat"],
                            'tanggal_diperbaharui' =>$request["tanggal_diperbaharui"],
                        ]);
        return $pertanyaan;
    }

    public static function destroy($id){
        $deleted = DB::table('pertanyaans')
                        ->where('id', $id)
                        ->delete();
        return $deleted;
    }
}