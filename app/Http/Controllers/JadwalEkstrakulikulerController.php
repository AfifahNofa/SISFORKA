<?php

namespace App\Http\Controllers;

use App\Models\JadwalEkstraModel;
use Illuminate\Http\Request;

class JadwalEkstrakulikulerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwalekstra = JadwalEkstraModel::all();
        return view('admin.jadwal.jadwalekstra', ['jadwalekstra' => $jadwalekstra]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.jadwal.create_jadwalekstra')
            ->with('url_form', url('/jadwalekstra'));
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
            'kode' => 'required|string|max:6|unique:jadwalekstra,kode',
            'hari' => 'required|string|max:20',
            'jam' => 'required|string|max:20',
        ]);
    
        $jadwalekstra = new JadwalEkstraModel();
        $jadwalekstra->kode = $request->get('kode');
        $jadwalekstra->hari = $request->get('hari');
        $jadwalekstra->jam = $request->get('jam');
        $jadwalekstra->save();

        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('jadwalekstra')
            ->with('success', 'Data Jadwal Ekstrakulikuler Berhasil Ditambahkan');
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
        $jadwalekstra = JadwalEkstraModel::find($id);
        return view('admin.jadwal.create_jadwalekstra')
            ->with('jadwalekstra', $jadwalekstra)
            ->with('url_form', url('/jadwalekstra/' . $id));
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
            'kode' => 'required|string|max:6|unique:jadwalekstra,kode,'.$id,
            'hari' => 'required|string|max:20',
            'jam' => 'required|string|max:20',
        ]);


        // Mengisi data jadwalekstra dengan nilai baru
        $jadwalekstra = JadwalEkstraModel::find($id);
        $jadwalekstra->kode = $request->get('kode');
        $jadwalekstra->hari = $request->get('hari');
        $jadwalekstra->jam = $request->get('jam');
        $jadwalekstra->save();
    
        return redirect()->route('jadwalekstra.index')
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
        JadwalEkstraModel::where('id', '=', $id)->delete();
        return redirect('jadwalekstra')
            ->with('success', 'Data Jadwal Ekstrakulikuler Berhasil Dihapus');
    }
}
