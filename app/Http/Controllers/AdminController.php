<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atasan;
use App\Models\Supir;
use App\Models\User;
use App\Models\Unit;
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
            'password' => bcrypt('plnbanjaramasin'),
            'atasan' => $request->atasan,
            'role_id' => $request->role_id,
        ]);

        return redirect()->route('admin.pegawai');
    }

    public function updatePegawai(Request $request, $id)
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
}
