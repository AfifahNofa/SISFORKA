<?php

namespace App\Http\Controllers;

use App\Models\KalenderModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kalender = KalenderModel::all();
        return view('admin.kalender.kalender')
        ->with('kalender', $kalender);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kalender.create_kalender')
        ->with('url_form', route('kalenderadmin.store'));
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
            'foto' => 'required',
        ]);
        $foto_name = null;
        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('foto')->store('images', 'public');
        }
        $kalender = new KalenderModel();

        $kalender->foto = $foto_name;

        $kalender->save();

        return redirect()->route('kalenderadmin.index')->with('success', 'kalender berhasil ditambahkan');
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
        $kalender = KalenderModel::find($id);
        return view('admin.kalender.create')
                    ->with('kalender', $kalender);
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

            'foto' => 'nullable',

        ]);

        $kalender = KalenderModel::find($id);
        $foto_name = null;
    if ($kalender->foto && file_exists(storage_path('app/public/'.$kalender->foto))) {
        Storage::delete('public/'. $kalender->foto);
    }
    if ($request->hasFile('image')) {
        $foto_name = $request->file('image')->store('images', 'public');
        $kalender->foto = $foto_name;
    }

    $kalender->update($request->except(['_token', '_method', 'submit']));

    // Jika data berhasil diupdate, akan kembali ke halaman utama
    return redirect('kalenderadmin')
        ->with('success', 'kalender berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KalenderModel::where('id', '=', $id)->delete();
        return redirect('kalenderadmin')
            ->with('success', 'Data kalender Berhasil Dihapus');
    }
}
