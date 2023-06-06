<?php

namespace App\Http\Controllers;

use App\Models\ppdbModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ppdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdb = ppdbModel::all();
        return view('admin.ppdb.ppdb')
            ->with('ppdb', $ppdb);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ppdb.create_ppdb')
            ->with('url_form', route('ppdb.store'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|max:2048',
        ]);

        $foto_name = null;
        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('foto')->store('images', 'public');
        }

        // Menyimpan foto jika ada
        $ppdb = new ppdbModel();
        $ppdb->foto = $foto_name;
        $ppdb->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('ppdb')
            ->with('success', 'Data PPDB Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $ppdb = ppdbModel::find($id);
        return view('admin.ppdb.create_ppdb')
            ->with('ppdb', $ppdb)
            ->with('url_form', route('ppdb.update', [$id]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $ppdb = ppdbModel::find($id);
        if (!$ppdb) {
            return redirect()->route('ppdb.index')->with('error', 'Data PPDB tidak ditemukan');
        }

        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        // Menghapus gambar lama jika ada
        if ($request->hasFile('foto')) {
            if ($ppdb->foto && file_exists(storage_path('app/public/' . $ppdb->foto))) {
                Storage::delete('public/' . $ppdb->foto);
            }
            // Mengunggah dan menyimpan gambar baru
            $foto_name = $request->file('foto')->store('images', 'public');
            $ppdb->foto = $foto_name;
        }

        $ppdb->save();

        return redirect()->route('ppdb.index')
            ->with('success', 'Data PPDB Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $ppdb = ppdbModel::find($id);
        if (!$ppdb) {
            return redirect()->route('ppdb.index')->with('error', 'Data PPDB tidak ditemukan');
        }

        // Menghapus gambar jika ada
        if ($ppdb->foto && file_exists(storage_path('app/public/' . $ppdb->foto))) {
            Storage::delete('public/' . $ppdb->foto);
        }

        // Menghapus data ppdb
        $ppdb->delete();
        return redirect('ppdb')
            ->with('success', 'Data PPDB Berhasil Dihapus');
    }
}
