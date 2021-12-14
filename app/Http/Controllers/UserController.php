<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atasan;
use App\Models\Supir;
use App\Models\User;
use App\Models\Unit;
use App\Models\Mobil;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('User.index');
    }

    //======================USER=====================
    public function profil()
    {
        $pegawai = User::where('id','=', Auth::user()->id)->get();
        $atasan = Atasan::all();
        return view('User.profil.index',compact('pegawai','atasan'));
    }

    public function storeProfil(Request $request)
    {
        $pegawai = User::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'bagian' => $request->bagian,
            'password' => bcrypt('plnbanjaramasin'),
            'atasan' => $request->atasan,
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('user.profil');
    }

    public function updateProfil(Request $request, $id)
    {
        $pegawai = User::find($id);
        $pegawai->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'bagian' => $request->bagian,
            'password' => bcrypt($request->password),
            'atasan' => $request->atasan,
            'role_id' => $request->role_id,
        ]);
        return redirect()->route('user.profil');
    }

    public function destroyProfil($id)
    {
        $pegawai = User::find($id);
        $pegawai->delete();

        return redirect()->route('user.profil');
    }
}
