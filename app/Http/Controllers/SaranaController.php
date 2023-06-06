<?php

namespace App\Http\Controllers;

use App\Models\SaranaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sarana = SaranaModel::all();
        return view('admin.sarana.sarana')->with('sarana', $sarana);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sarana.create_sarana')
            ->with('url_form', route('sarana.store'));
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
            'judul' => 'required|string|max:225',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ket' => 'nullable|string|max:225',
        ]);
        $foto_name = null;
        if ($request->file('foto')) {
            $foto = $request->file('foto');
            $foto_name = time() . '_' . $foto->getClientOriginalName();
            $foto_name = $request->file('foto')->store('images', 'public');
        }
     
        $sarana = new SaranaModel();
        $sarana->judul = $request->input('judul');
        $sarana->foto = $foto_name;
        $sarana->ket = $request->input('ket');
        $sarana->save();

       

        return redirect()->route('sarana.index')->with('success', 'Sarana berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sarana = SaranaModel::find($id);
        return view('admin.sarana.create_sarana')
                ->with('sarana', $sarana)
                 ->with('url_form', url('/sarana/'. $id));
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
        $sarana = SaranaModel::find($id);
        if (!$sarana) {
            return redirect()->route('sarana.index')->with('error', 'Data sarana tidak ditemukan');
        }
    
        $request->validate([
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Mengisi data sarana dengan nilai baru
        $sarana->judul = $request->input('judul');
        $sarana->ket = $request->input('ket');
        $sarana->save();
    
        // Menghapus gambar lama jika ada
        if ($sarana->foto && file_exists(storage_path('app/public/'.$sarana->foto))) {
            Storage::delete('public/'. $sarana->foto);
        }
    
        // Mengunggah dan menyimpan gambar baru
        $foto_name = $request->file('foto')->store('images', 'public');
        $sarana->foto = $foto_name;
        
        $sarana->save();

    
        return redirect('sarana')
        ->with('success', 'sarana berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        saranaModel::where('id', '=', $id)->delete();
        return redirect('sarana')
            ->with('success', 'Data sarana Berhasil Dihapus');
    }
}