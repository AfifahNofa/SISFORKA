<?php

namespace App\Http\Controllers;

use App\Models\KontakModel;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Tampilkan semua kontak yang ada
        $kontak = KontakModel::all();
        return view('user.kontak')
            ->with('kontak', $kontak);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    return view('user.kontak')
        ->with('url_form', route('kontak.store'));
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'no_telp' => 'required',
        'pesan' => 'required',
    ]);

    // Simpan kontak ke database
    KontakModel::create($validatedData);

    return redirect()->route('kontak.index')
        ->with('success', 'Pesan Anda telah dikirim!');
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
        KontakModel::where('id', $id)->delete();
        return redirect('kontakadmin')
            ->with('success', 'Data kontak berhasil dihapus');
    }
}
