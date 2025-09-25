<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\mahasiswa;
use App\Models\dokumen;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){

        $nim = Auth::user()->nim;
        
        $mahasiswa = mahasiswa::where('nim', $nim)->get();
        $dokumen = dokumen::where('nim', $nim)->get();

        return view('dokumen.index', compact('mahasiswa', 'dokumen'));
    }

    public function uploadArtefak(Request $request){
        $nim = Auth::user()->nim;
        $data = dokumen::where('nim', $nim)->get();
        
        $request->validate([
            'file_artefak' => 'required|mimes:pdf|max:20048', // Maksimal 20MB
        ]);

        if($data->isEmpty()){
           
            $file = $request->file('file_artefak');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            dokumen::create([
                'artefak'=>$path,
                'ppkha'=>'-',
                'sanksos'=>'-',
                'pernyataan_baaf'=>'-',
                'foto'=>'-',
                'nim'=>$nim
            ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');

        }else{
            $file = $request->file('file_artefak');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            DB::table('dokumens')
                ->where('nim', $nim)
                ->update([
                    'artefak' => $path
                ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');
        }
    }

    public function uploadPPKHA(Request $request){
        $nim = Auth::user()->nim;
        $data = dokumen::where('nim', $nim)->get();
        
        $request->validate([
            'file_ppkha' => 'required|mimes:pdf|max:20048', // Maksimal 20MB
        ]);

        if($data->isEmpty()){
           
            $file = $request->file('file_ppkha');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            dokumen::create([
                'artefak'=>'-',
                'ppkha'=>$path,
                'sanksos'=>'-',
                'pernyataan_baaf'=>'-',
                'foto'=>'-',
                'nim'=>$nim
            ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');

        }else{
            $file = $request->file('file_ppkha');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            DB::table('dokumens')
                ->where('nim', $nim)
                ->update([
                    'ppkha' => $path
                ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');
        }
    }

    public function uploadSanksos(Request $request){
        $nim = Auth::user()->nim;
        $data = dokumen::where('nim', $nim)->get();
        
        $request->validate([
            'file_bebas_sanksos' => 'required|mimes:pdf|max:20048', // Maksimal 20MB
        ]);

        if($data->isEmpty()){
           
            $file = $request->file('file_bebas_sanksos');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            dokumen::create([
                'artefak'=>'-',
                'ppkha'=>'-',
                'sanksos'=>$path,
                'pernyataan_baaf'=>'-',
                'foto'=>'-',
                'nim'=>$nim
            ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');

        }else{
            $file = $request->file('file_bebas_sanksos');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            DB::table('dokumens')
                ->where('nim', $nim)
                ->update([
                    'sanksos' => $path
                ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');
        }
    }

    public function uploadBaaf(Request $request){
        $nim = Auth::user()->nim;
        $data = dokumen::where('nim', $nim)->get();
        
        $request->validate([
            'file_pernyataan_baaf' => 'required|mimes:pdf|max:20048', // Maksimal 20MB
        ]);

        if($data->isEmpty()){
           
            $file = $request->file('file_pernyataan_baaf');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            dokumen::create([
                'artefak'=>'-',
                'ppkha'=>'-',
                'sanksos'=>'-',
                'pernyataan_baaf'=>$path,
                'foto'=>'-',
                'nim'=>$nim
            ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');

        }else{
            $file = $request->file('file_pernyataan_baaf');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            DB::table('dokumens')
                ->where('nim', $nim)
                ->update([
                    'pernyataan_baaf' => $path
                ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');
        }
    }


    public function uploadFoto(Request $request){
        $nim = Auth::user()->nim;
        $data = dokumen::where('nim', $nim)->get();
        
        $request->validate([
            'foto' => 'required|mimes:jpeg|max:2048', // Maksimal 20MB
        ]);

        if($data->isEmpty()){
           
            $file = $request->file('foto');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            dokumen::create([
                'artefak'=>'-',
                'ppkha'=>'-',
                'sanksos'=>'-',
                'pernyataan_baaf'=>'-',
                'foto'=>$path,
                'nim'=>$nim
            ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');

        }else{
            $file = $request->file('foto');

            // Ambil nama asli file
            $originalName = $file->getClientOriginalName();
    
            // Simpan file dengan nama asli di folder 'public/uploads'
            $path = $file->storeAs('public/uploads', $originalName);

            DB::table('dokumens')
                ->where('nim', $nim)
                ->update([
                    'foto' => $path
                ]);
            
            session()->flash('alert', 'File Upload Success');
            return redirect('/upload');
        }
    }

    public function getDetailWisudawan(Request $request){
        $nim = $request->nim;
        
        $mahasiswa = mahasiswa::where('nim', $nim)->get();
        $dokumen = dokumen::where('nim', $nim)->get();

        return view('user.admin.detail-wisudawan', compact('mahasiswa', 'dokumen'));
    }

    public function detailDokumen(Request $request){
        $file = Storage::url($request->file);

        return view('dokumen.detail-dokumen', compact('file'));

    }
}
