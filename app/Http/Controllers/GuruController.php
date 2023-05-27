<?php

namespace App\Http\Controllers;

use App\Models\GuruModel;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = GuruModel::all();
        return view('admin.guru.guru')
            ->with('guru', $guru);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.create_guru')
            ->with('url_form', route('guru.store'));
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
            'kode' => 'required|string|max:6|unique:guru,kode',
            'nama' => 'required|string|max:225',
            'foto' => 'required|image|max:2048',
            'jabatan' => 'required|string',
        ]);

        $foto_name = null;
        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('foto')->store('images', 'public');
        }

        // Menyimpan foto jika ada
        $guru = new GuruModel();
        $guru->kode = $request->get('kode');
        $guru->nama = $request->get('nama');
        $guru->foto = $foto_name;
        $guru->jabatan = $request->get('jabatan');
        $guru->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('guru')
            ->with('success', 'Data Guru Berhasil Ditambahkan');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GuruModel::where('id', '=', $id)->delete();
        return redirect('guru')
            ->with('success', 'Data Guru Berhasil Dihapus');
    }
}
