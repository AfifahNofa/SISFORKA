<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ArtikelModel;
use App\Models\GuruModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $artikel = ArtikelModel::all();
        $artikel = ArtikelModel::with('guru')->get();
        return view('admin.artikel.artikel')
        ->with('artikel', $artikel);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = GuruModel::all();
        return view('admin.artikel.create_artikel')
            ->with('guru', $guru)
            ->with('url_form', route('artikeladmin.store'));

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
            'kode' => 'required|unique:artikel',
            'judul' => 'required',
            'ket' => 'required',
            'foto' => 'required',
            'tanggal_publish' => 'required|date',
            'url' => 'required',
            'guru_id' => 'required',
        ]);
        $foto_name = null;
        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('foto')->store('images', 'public');
        }
        $artikel = new ArtikelModel();
        $artikel->kode = $request->input('kode');
        $artikel->judul = $request->input('judul');
        $artikel->ket = $request->input('ket');
        $artikel->foto = $foto_name;
        $artikel->tanggal_publish = $request->input('tanggal_publish');
        $artikel->url = $request->input('url');
        $artikel->save();

        $guru = new GuruModel;
        $guru->id = $request->get('guru_id');
    
        $artikel->guru()->associate($guru);
        $artikel->save();

        return redirect()->route('artikeladmin.index')->with('success', 'Artikel berhasil ditambahkan');

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
        $artikel = ArtikelModel::with('guru')->where('id', $id)->first();
        $guru = GuruModel::all(); //mendapatkan data dari tabel kelas
        return view('admin.artikel.create_artikel')
                    ->with('artikel', $artikel)
                    ->with('guru', $guru)
                    ->with('url_form', url('/artikeladmin/' . $id));
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
        $artikel = ArtikelModel::find($id);
    if (!$artikel) {
        return redirect()->route('artikel.index')->with('error', 'Data artikel tidak ditemukan');
    }

    $request->validate([
        'kode' => 'required|unique:artikel,kode,' . $id,
        'judul' => 'nullable|max:225',
        'ket' => 'required',
        'foto' => 'nullable',
        'tanggal_publish' => 'required|date',
        'url' => 'required',
    ]);

    // Mengisi data guru dengan nilai baru
    $artikel->kode = $request->input('kode');
    $artikel->judul = $request->input('judul');
    $artikel->ket = $request->input('ket');
    $artikel->tanggal_publish = $request->input('tanggal_publish');
    $artikel->url = $request->input('url');

    // Menghapus gambar lama jika ada
    if ($artikel->foto && file_exists(storage_path('app/public/'.$artikel->foto))) {
        Storage::delete('public/'. $artikel->foto);
    }

    // Mengunggah dan menyimpan gambar baru
    $foto_name = $request->file('foto')->store('images', 'public');
    $artikel->foto = $foto_name;
    
    $artikel->save();

    $guru = new GuruModel();
    $guru->id = $request->get('guru_id');
    
    $artikel->guru()->associate($guru);
    $artikel->save();

    return redirect('artikeladmin')
    ->with('success', 'artikel berhasil diupdate');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ArtikelModel::where('id', '=', $id)->delete();
        return redirect('artikeladmin')
            ->with('success', 'Data artikel Berhasil Dihapus');
    }
}
