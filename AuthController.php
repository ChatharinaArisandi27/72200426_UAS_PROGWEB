<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class AuthController extends Controller
{
    public function user(){
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function formuser(){
        return view('formuser');
    }

    public function simpanUser(Request $request)
    {
        $user = User::create([
            'usernam' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/user');
    }

    public function edituser($id){

        $user = User::find($id);
        return view('updateuser', ['user' => $user]);
    }

    public function UpdateUser($id, Request $request){

        $user = User::find($id);
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = bcrypt($request->hari);
        $user -> save();
        return redirect('/user');
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user -> delete();
        return redirect('/user')->with('alert', 'Data Berhasil Dihapus...');
    }

    public function Login(){
        return view('login');
    }

    public function ceklogin(Request $request){
        if(!Auth::attempt(['username' => $request->get('username'), 'password' => $request->get('password')])){
            return redirect('/mahasiswa');
        }
        else{
            return redirect('/mahasiswa');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
