<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    //
    public function index($pertanyaan_id){
        // dd('jawaban');
        $jawabans = JawabanModel::find_by_pertanyaan_id($pertanyaan_id);
        // dd($jawaban);
        return view('jawaban.index', compact('jawabans'));
    }

    public function create(){
        return view('jawaban.form');
    }

    public function jawaban(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $jawaban = JawabanModel::save($data);
        // dd($jawaban);
        if($jawaban){
            return redirect('/jawaban');
        }
    }

    public function store($pertanyaan_id, Request $request){
        // dd('test');
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        JawabanModel::save($data);
        return redirect('/pertanyaan');
    }
}
