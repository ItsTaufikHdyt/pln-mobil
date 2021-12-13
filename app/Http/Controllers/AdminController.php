<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atasan;
use App\Models\Supir;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin.index');
    }

    //======================USER=====================
    public function user()
    {
        return view('Admin.user.index');
    }

    //======================ATASAN=====================
    public function atasan()
    {
        $atasan = Atasan::all();
        return view('Admin.atasan.index',compact('atasan'));
    }

    public function storeAtasan(Request $request)
    {
        $atasan = Atasan::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.atasan');
    }

    public function updateAtasan(Request $request,$id)
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
        return view('Admin.supir.index',compact('supir'));
    }

    public function storeSupir(Request $request)
    {
        $supir = Supir::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('admin.supir');
    }

    public function updateSupir(Request $request,$id)
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
}
