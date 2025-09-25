<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengumuman;
Use DB; 

class PengumumanController extends Controller
{
    public function store(Request $request){

        $data = pengumuman::create([
            'lembaga'=>$request->lembaga,
            'judul'=>$request->judul,
            'tanggal'=>$request->date_release,
            'content'=>$request->content
        ]);
        return redirect('/pengumuman');
    }

    public function index(){

        $data = pengumuman::all();
        return view('pengumuman.index', compact('data'));

    }

    public function detail(Request $request){
        
        $id = $request->id;
        $data = pengumuman::find($id);   

        return view('pengumuman.detail', compact('data'));
    }

    public function edit(Request $request){
        $id = $request->id;
        $data= pengumuman::find($id);

        return view('pengumuman.edit', compact('data'));
    }

    public function update(Request $request){
        $result = DB::table('pengumumen')
        ->where('id', $request->id)
        ->update([
            'lembaga'=>$request->lembaga,
            'judul'=>$request->judul,
            'tanggal'=>$request->date_release,
            'content'=>$request->content
        ]);

        return redirect('/pengumuman');
    }

    public function delete(Request $request){
        DB::table('pengumumen')->where('id', $request->id)->delete();

        return redirect('/pengumuman');
    }
}
