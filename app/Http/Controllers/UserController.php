<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\mahasiswa;

class UserController extends Controller
{
    public function openForm(){
        return view('user.admin.register');
    }

    public function registerAdmin(Request $request){
        
        if($request->password != $request->repeat_password){
            session()->flash('alert', 'Password tidak sama');
    
            return redirect()->back();
        }else{
            $data = user::create([
                'name'=>$request->name,
                'nim'=>'0',
                'role'=>'Admin',
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
    
            session()->flash('alert', 'Admin Berhasil di Tambahkan');
    
            return redirect()->back();
        }

    }
    protected function registerMahasiswa(Request $request)
    {
        if($request->password != $request->repeat_password){
            session()->flash('alert', 'Password tidak sama');
    
            return redirect()->back();
        }else{
            $mahasiswa = mahasiswa::where('nim', $request->nim)->get();

            if($mahasiswa->isEmpty()){
                session()->flash('alert', 'Nomor Induk Mahasiswa tidak terdaftar sebagai calon Wisudawan');

                return redirect()->back();
            }
            else{
                user::create([
                    'name'=>$request->name,
                    'nim'=>$request->nim,
                    'role'=>'Mahasiswa',
                    'email'=>$request->email,
                    'password'=>Hash::make($request->password),
                ]);
                session()->flash('alert', 'Berhasil Mendaftar');
        
                return view('auth.login');
            }
        }
    }

    public function registerForm(){
        return view('user.wisudawan.register');
    }
}
