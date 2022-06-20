<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Maba;

class MahasiswaController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Maba::paginate(10);
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function home(){
        $mahasiswa = Maba::paginate(10);
        return view('homee', ['mahasiswa' => $mahasiswa]);
    }

    public function pencarian (Request $request){
        $cari = $request->cari;
        $mahasiswa = Maba::where('nim', 'nama', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }

    public function form(){
        return view('form');
    }

    public function simpanmahasiswa(Request $request ){
       $mahasiswa = Maba::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat
        ]);
        return redirect('/mahasiswa');
    }

    public function editmahasiswa($id){

        $mahasiswa = Maba::find($id);
        return view('upmas', ['mahasiswa' => $mahasiswa]);
    }

    public function updatemahasiswa ($id, Request $request){
        $mahasiswa = Maba::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->jurusan= $request->jurusan;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa ->save();
        return redirect('/mahasiswa');
    }

    public function deletemahasiswa($id){
        $mahasiswa = Maba::find($id);
        $mahasiswa -> delete();
        return redirect('/mahasiswa')->with('alert', 'Data Berhasil Dihapus...');
    }

}
