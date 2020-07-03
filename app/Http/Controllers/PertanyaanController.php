<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
        $pertanyaan = PertanyaanModel::get_all();
        // dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create(){
        return view('pertanyaan.form');
    }

    public function pertanyaan(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::save($data);
        // dd($jawaban);
        if($pertanyaan){
            return redirect('/pertanyaan');
        }
    }
}
