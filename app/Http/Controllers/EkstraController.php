<?php

namespace App\Http\Controllers;

use App\Models\EkstraModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EkstraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekstrakulikuler = EkstraModel::all();
        return view('admin.ekstra.ekstra')
            ->with('ekstrakulikuler', $ekstrakulikuler);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ekstra.create_ekstra')
            ->with('url_form', url('/ekstrakulikuler'));
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
            'kode' => 'required|string|max:6|unique:ekstrakulikuler,kode',
            'nama' => 'required|string|max:225',
            'foto' => 'required|image|max:2048',
            'materi' => 'required|string',
            'target' => 'required|string',
        ]);

        $foto_name = null;
        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('foto')->store('images', 'public');
        }

        // Menyimpan foto jika ada
        $ekstrakulikuler = new EkstraModel();
        $ekstrakulikuler->kode = $request->get('kode');
        $ekstrakulikuler->nama = $request->get('nama');
        $ekstrakulikuler->foto = $foto_name;
        $ekstrakulikuler->materi = $request->get('materi');
        $ekstrakulikuler->target = $request->get('target');
        $ekstrakulikuler->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('ekstrakulikuler')
            ->with('success', 'Data Ekstrakulikuler Berhasil Ditambahkan');
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
        $ekstrakulikuler = EkstraModel::find($id);
        return view('admin.ekstra.create_ekstra')
            ->with('ekstrakulikuler', $ekstrakulikuler)
            ->with('url_form', url('/ekstrakulikuler/' . $id));
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
        $ekstrakulikuler = EkstraModel::find($id);
        if (!$ekstrakulikuler) {
            return redirect()->route('ekstrakulikuler.index')->with('error', 'Data ekstrakulikuler tidak ditemukan');
        }
        $request->validate([
            'kode' => 'required|string|max:6|unique:ekstrakulikuler,kode,'.$id,
            'nama' => 'required|string|max:225',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'materi' => 'required|string',
            'target' => 'required|string',
        ]);


        // Mengisi data guru dengan nilai baru
        $ekstrakulikuler->kode = $request->get('kode');
        $ekstrakulikuler->nama = $request->get('nama');
        $ekstrakulikuler->materi = $request->get('materi');
        $ekstrakulikuler->target = $request->get('target');
       
    
        // Menghapus gambar lama jika ada
        if ($ekstrakulikuler->foto && file_exists(storage_path('app/public/'.$ekstrakulikuler->foto))) {
            Storage::delete('public/'. $ekstrakulikuler->foto);
        }
    
        // Mengunggah dan menyimpan gambar baru
        $foto_name = $request->file('foto')->store('images', 'public');
        $ekstrakulikuler->foto = $foto_name;

        $ekstrakulikuler->save();
    
        return redirect()->route('ekstrakulikuler.index')
            ->with('success', 'Data Ekstrakulikuler Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        EkstraModel::where('id', '=', $id)->delete();
        return redirect('ekstrakulikuler')
            ->with('success', 'Data Ekstrakulikuler Berhasil Dihapus');
    }
}
