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
        return view('user.datakalender')
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
            ->with('url_form', route('kalender.store'));
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

        return redirect()->route('kalender.index')->with('success', 'kalender berhasil ditambahkan');
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
        return view('admin.kalender.create_kalender')
            ->with('kalender', $kalender)
            ->with('url_form', route('kalender.update', [$id]));
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
        $kalender = kalenderModel::find($id);
        if (!$kalender) {
            return redirect()->route('kalender.index')->with('error', 'Data kalender tidak ditemukan');
        }

        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);


        // Menghapus gambar lama jika ada
        if ($request->hasFile('foto')) {
            if ($kalender->foto && file_exists(storage_path('app/public/' . $kalender->foto))) {
                Storage::delete('public/' . $kalender->foto);
            }
            // Mengunggah dan menyimpan gambar baru
            $foto_name = $request->file('foto')->store('images', 'public');
            $kalender->foto = $foto_name;
        }

        $kalender->save();

        return redirect()->route('kalender.index')
            ->with('success', 'Data Kalender Berhasil Diperbarui');
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
        return redirect('kalender')
            ->with('success', 'Data kalender Berhasil Dihapus');
    }
}
