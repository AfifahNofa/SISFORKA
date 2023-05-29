<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = SiswaModel::all();
        return view('admin.siswa.siswa', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create_siswa')
            ->with('url_form', route('siswa.store'));
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
            'kelas' => 'required|string|max:6',
            'jumlah' => 'required|integer',
        ]);
        $data = SiswaModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('siswa')
            ->with('success', 'Data Siswa Berhasil Ditambahkan');
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
        $siswa = SiswaModel::find($id);
        return view('admin.siswa.create_siswa')
            ->with('siswa', $siswa)
            ->with('url_form', url('/siswa/' . $id));
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
            'kelas' => 'required|string|max:6' . $id,
            'jumlah' => 'required|integer',
        ]);

        $data = SiswaModel::where('id', '=', $id)->update($request->except(['_token', '_method', 'submit']));
        return redirect('siswa')
            ->with('success', 'Data Siswa Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SiswaModel::where('id', '=', $id)->delete();
        return redirect('siswa')
            ->with('success', 'Siswa Berhasil Dihapus');
    }
}
