<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestController extends Controller
{
    public function index($id){
        return view('blog', compact('id'));
    }

    public function post(Request $request){
        // $data = $request->all() ;
        // return $data["nama"] ;

        // $nama = $request->nama ;
        // return $nama ;

        // $data = $request->only('nama', 'kelas') ;
        // dd($data) ;

        // $this->validate($request, [
        //    'nama' => ['required'],
        //    'kelas' => ['required'],
        //    'alamat' => ['required'] 
        // ]);

        // $valid = Validator::make($request->all(), [
        //     'nama' => ['required'],
        //     'kelas' => ['required'],
        //     'alamat' => ['required'],
        // ]);

        // if($valid->fails()) return redirect()->back()->withErrors($valid)->withInput();

        return "OK" ;

    }

    public function update(Request $request){
        dd($request->all());
    }
}
