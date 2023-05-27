<?php

namespace App\Http\Controllers;

use App\Models\EkstraModel;
use Illuminate\Http\Request;

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
        EkstraModel::where('id', '=', $id)->delete();
        return redirect('ekstrakulikuler')
            ->with('success', 'Data Ekstrakulikuler Berhasil Dihapus');
    }
}
