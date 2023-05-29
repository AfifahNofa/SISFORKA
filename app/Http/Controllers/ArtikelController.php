<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\ArtikelModel;
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
        $artikel = ArtikelModel::all();
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
        return view('admin.artikel.create_artikel')
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
            'foto' => 'required',
            'tanggal_publish' => 'required|date',
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
        $artikel->foto = $foto_name;
        $artikel->tanggal_publish = $request->input('tanggal_publish');
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
        $artikel = ArtikelModel::find($id);
        return view('admin.artikel.create')
                    ->with('artikel', $artikel);
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
        $request->validate([
            'kode' => 'required|unique:artikel,kode,' . $id,
            'judul' => 'nullable|max:225',
            'foto' => 'nullable',
            'tanggal_publish' => 'required|date',
        ]);

        $artikel = ArtikelModel::find($id);
        $foto_name = null;
    if ($artikel->foto && file_exists(storage_path('app/public/'.$artikel->foto))) {
        Storage::delete('public/'. $artikel->foto);
    }
    if ($request->hasFile('image')) {
        $foto_name = $request->file('image')->store('images', 'public');
        $artikel->foto = $foto_name;
    }

    $artikel->update($request->except(['_token', '_method', 'submit']));

    // Jika data berhasil diupdate, akan kembali ke halaman utama
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
