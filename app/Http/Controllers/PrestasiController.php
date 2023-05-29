<?php

namespace App\Http\Controllers;

use App\Models\PrestasiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestasi = PrestasiModel::all();
        return view('admin.prestasi.prestasi')
            ->with('prestasi', $prestasi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.prestasi.create_prestasi')
            ->with('url_form', route('prestasi.store'));
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
            'keterangan' => 'required|string',
        ]);

        $foto_name = null;
        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('foto')->store('images', 'public');
        }

        // Menyimpan foto jika ada
        $prestasi = new PrestasiModel();
        $prestasi->foto = $foto_name;
        $prestasi->keterangan = $request->get('keterangan');
        $prestasi->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('prestasi')
            ->with('success', 'Data Prestasi Berhasil Ditambahkan');
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
        $prestasi = PrestasiModel::find($id);
        return view('admin.prestasi.create_prestasi')
            ->with('prestasi', $prestasi)
            ->with('url_form', url('/prestasi/' . $id));
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
        $prestasi = PrestasiModel::find($id);
        if (!$prestasi) {
            return redirect()->route('prestasi.index')->with('error', 'Data Prestasi tidak ditemukan');
        }

        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'keterangan' => 'required|string',
        ]);

        // Mengisi data prestasi dengan nilai baru
        $prestasi->keterangan = $request->get('keterangan');

        // Menghapus gambar lama jika ada
        if ($request->hasFile('foto')) {
            if ($prestasi->foto && file_exists(storage_path('app/public/' . $prestasi->foto))) {
                Storage::delete('public/' . $prestasi->foto);
            }
            // Mengunggah dan menyimpan gambar baru
            $foto_name = $request->file('foto')->store('images', 'public');
            $prestasi->foto = $foto_name;
        }

        $prestasi->save();

        return redirect()->route('prestasi.index')
            ->with('success', 'Data Prestasi Berhasil Diperbarui');
    }

    public function destroy($id)
    {
        $prestasi = PrestasiModel::find($id);
        if (!$prestasi) {
            return redirect()->route('prestasi.index')->with('error', 'Data Prestasi tidak ditemukan');
        }

        // Menghapus gambar jika ada
        if ($prestasi->foto && file_exists(storage_path('app/public/' . $prestasi->foto))) {
            Storage::delete('public/' . $prestasi->foto);
        }

        // Menghapus data prestasi
        $prestasi->delete();
        return redirect('prestasi')
            ->with('success', 'Data Prestasi Berhasil Dihapus');
    }
}
