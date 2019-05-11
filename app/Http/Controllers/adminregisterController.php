<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komunitas;                    
use Illuminate\Support\Facades\Storage;

class adminregisterController extends Controller
{
    public function index()
    {
        return view('adminregister');
    }

    public function add(Request $request){
        $this->validate($request,[
            'nama'=>'required',
            'email'=>'required',
            'password'=> ['required', 'string', 'min:6', 'confirmed'],                                      
            'telfon'=>'required',
            'daerah'=>'required',
            'foto'=>'required|image|mimes:jpeg,png,jpg,gif,svg', 
            'deskripsi'=>'required',
        ]);
        error_log($request);
        $admin = new Komunitas;
        $admin->nama = $request->input('nama');
        $admin->email = $request->input('email');
        $admin->password = $request->input('password');
        $admin->telfon = $request->input('telfon');
        $admin->daerah = $request->input('daerah');
        $admin->deskripsi = $request->input('deskripsi');
        if($request->hasFile('foto')){
            $name = Storage::disk('local')->put('public',$request->foto);
            $admin->foto= $name;
        }
        $admin->save();
        return redirect('/admin')->with('info','admin berhasil ditambahkan.');
    }
}
