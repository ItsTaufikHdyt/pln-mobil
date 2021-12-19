<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atasan;
use App\Models\Jenis_kendaraan;
use App\Models\Supir;
use App\Models\User;
use App\Models\Unit;
use App\Models\Mobil;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }

    //======================USER=====================
    public function pegawai()
    {
        $pegawai = User::all();
        $atasan = Atasan::all();
        return view('Admin.user.index',compact('pegawai','atasan'));
    }

    public function storePegawai(Request $request)
    {
        $pegawai = User::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'bagian' => $request->bagian,
            'password' => bcrypt('plnbanjarmasin'),
            'atasan_id' => $request->atasan_id,
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('admin.pegawai');
    }

    public function updatePegawai(Request $request, $id)
    {
        
        $data = [
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'bagian' => $request->bagian,
            'atasan_id' => $request->atasan_id,
            'role_id' => $request->role_id,
        ];
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }
        $pegawai = DB::table('users')
            ->where('id', $id)
            ->update($data);

        return redirect()->route('admin.pegawai');
    }

    public function destroyPegawai($id)
    {
        $pegawai = User::find($id);
        $pegawai->delete();

        return redirect()->route('admin.pegawai');
    }

    //======================ATASAN=====================
    public function atasan()
    {
        $atasan = Atasan::all();
        return view('Admin.atasan.index', compact('atasan'));
    }

    public function storeAtasan(Request $request)
    {
        $atasan = Atasan::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.atasan');
    }

    public function updateAtasan(Request $request, $id)
    {
        $atasan = Atasan::find($id);
        $atasan->update([
            'nip' => $request->nip,
            'nama' => $request->nama
        ]);
        return redirect()->route('admin.atasan');
    }

    public function destroyAtasan($id)
    {
        $atasan = Atasan::find($id);
        $atasan->delete();

        return redirect()->route('admin.atasan');
    }
    //======================Supir====================
    public function supir()
    {
        $supir = Supir::all();
        return view('Admin.supir.index', compact('supir'));
    }

    public function storeSupir(Request $request)
    {
        $supir = Supir::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.supir');
    }

    public function updateSupir(Request $request, $id)
    {
        $supir = Supir::find($id);
        $supir->update([
            'nama' => $request->nama
        ]);
        return redirect()->route('admin.supir');
    }

    public function destroySupir($id)
    {
        $supir = Supir::find($id);
        $supir->delete();

        return redirect()->route('admin.supir');
    }

    //======================Unit====================
    public function unit()
    {
        $unit = Unit::all();
        return view('Admin.unit.index', compact('unit'));
    }

    public function storeUnit(Request $request)
    {
        $unit = Unit::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.unit');
    }

    public function updateUnit(Request $request, $id)
    {
        $unit = Unit::find($id);
        $unit->update([
            'nama' => $request->nama
        ]);
        return redirect()->route('admin.unit');
    }

    public function destroyUnit($id)
    {
        $unit = Unit::find($id);
        $unit->delete();

        return redirect()->route('admin.unit');
    }

    //======================Jenis Kendaaraan===================
    public function Jenis()
    {
        $jenis = Jenis_kendaraan::all();
        return view('Admin.jenis_kendaraan.index', compact('jenis'));
    }

    public function storeJenis(Request $request)
    {
        $jenis = Jenis_kendaraan::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.jenis');
    }

    public function updateJenis(Request $request, $id)
    {
        $jenis = Jenis_kendaraan::find($id);
        $jenis->update([
            'nama' => $request->nama
        ]);
        return redirect()->route('admin.jenis');
    }

    public function destroyJenis($id)
    {
        $jenis = Jenis_kendaraan::find($id);
        $jenis->delete();

        return redirect()->route('admin.jenis');
    }

    //======================Unit====================
    public function mobil()
    {
        $mobil = Mobil::all();
        $jenis = Jenis_kendaraan::all();
        $unit = Unit::all();
        return view('Admin.mobil.index', compact('mobil','unit','jenis'));
    }

    public function storeMobil(Request $request)
    {
        $mobil = Mobil::create([
            'nopol' => $request->nopol,
            'jenis_id' => $request->jenis_id,
            'unit_id' => $request->unit_id,
            'status' => 1
        ]);

        return redirect()->route('admin.mobil');
    }

    public function updateMobil(Request $request, $id)
    {
        $mobil = Mobil::find($id);
        $mobil->update([
            'nopol' => $request->nopol,
            'jenis_id' => $request->jenis_id,
            'unit_id' => $request->unit_id,
        ]);
        return redirect()->route('admin.mobil');
    }

    public function destroyMobil($id)
    {
        $mobil = Mobil::find($id);
        $mobil->delete();

        return redirect()->route('admin.mobil');
    }

    //======================Peminjaman====================
    public function peminjaman()
    {
        $peminjaman = Peminjaman::all();
        $jenis = Jenis_kendaraan::all();
        $mobil = Mobil::all();
        $supir = Supir::all();
        return view('Admin.peminjaman.index',compact('peminjaman','jenis','mobil','supir'));
    }

    public function updatePeminjaman(Request $request,$id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->update([
            'status' => $request->status,
            'mobil_id' => $request->mobil_id,
            'supir_id' => $request->supir_id,
            'catatan' => $request->catatan
        ]);

        return redirect()->route('admin.peminjaman');
    }

    public function destroyPeminjaman($id)
    {
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();

        return redirect()->route('admin.peminjaman');
    }
}
