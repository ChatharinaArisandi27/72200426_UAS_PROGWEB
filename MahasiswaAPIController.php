<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;

class MahasiswaAPIController extends Controller
{
    public function mahasiswa(){
        $mahasiswa = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Ditampilkan',
            'data' => $mahasiswa

        ], 200);
    }

    public function create(Request $request ){
       $mahasiswa = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jurusan' => $request->jurusan,
            'alamat'=> $request-> alamat
        ]); 

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Disimpan'

            ], 200);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Disimpan'

            ], 400);
        }
    }

    public function update($id,Request $request){
        $mahasiswa = Mahasiswa::whereId($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'bidang_minat' => $request->bidang_minat
        ]); 

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Diubah'

            ], 200);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Diubah'

            ], 400);
        }
    
    }

    public function delete($id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa -> delete();

        if($mahasiswa){
            return response()->json([
                'success' => true,
                'message' => 'Berhasil Di hapus'
    
            ], 200);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Gagal Di hapus'
    
            ], 400);
    }

}


}
 