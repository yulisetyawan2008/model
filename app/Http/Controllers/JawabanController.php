<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    //
    public function index($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        // dd($jawaban);
        return view('jawaban.index', compact('pertanyaan'));
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

    public function store(Request $request){
        dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $jawaban = JawabanModel::save($data);
        // dd($jawaban);
        if($jawaban){
            return redirect('/jawaban');
        }
    }
}
