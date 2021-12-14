<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atasan;
use App\Models\Supir;
use App\Models\User;
use App\Models\Unit;
use App\Models\Mobil;
use App\Models\Peminjaman;
use App\Models\Jenis_kendaraan;
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

    public function peminjaman()
    {
        $peminjaman = Peminjaman::where('user_id','=', Auth::user()->id)->get();
        $jenis = Jenis_kendaraan::all();
        return view('User.peminjaman.index',compact('peminjaman','jenis'));
    }

    public function storePeminjaman(Request $request)
    {
        $peminjaman = Peminjaman::create([
            'keperluan_id' => $request->keperluan_id,
            'nama' => $request->nama,
            'bagian' => $request->bagian,
            'jumlah_penumpang' => $request->jumlah_penumpang,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_kembali' => $request->tgl_kembali,
            'jenis_id' => $request->jenis_id,
            'tujuan' => $request->tujuan,
            'keperluan' => $request->keperluan,
            'status' => 1,
            'user_id' => $request->user_id
        ]);

        return redirect()->route('user.peminjaman');
    }

    public function updatePeminjaman(Request $request,$id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->update([
            'keperluan_id' => $request->keperluan_id,
            'nama' => $request->nama,
            'bagian' => $request->bagian,
            'jumlah_penumpang' => $request->jumlah_penumpang,
            'tgl_berangkat' => $request->tgl_berangkat,
            'tgl_kembali' => $request->tgl_kembali,
            'jenis_id' => $request->jenis_id,
            'tujuan' => $request->tujuan,
            'keperluan' => $request->keperluan,
            'status' => 1,
            'user_id' => $request->user_id
        ]);

        return redirect()->route('user.peminjaman');
    }

    public function destroyPeminjaman($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        return redirect()->route('user.peminjaman');
    }

}
