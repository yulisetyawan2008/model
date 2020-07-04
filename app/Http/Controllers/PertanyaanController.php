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

    public function store(Request $request){
        // dd($request->all());
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::save($data);
        // dd($jawaban);
        if($pertanyaan){
            return redirect('/pertanyaan');
        }
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request){
        // dd($request->all());
        $pertanyaan = PertanyaanModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $deleted = PertanyaanModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
