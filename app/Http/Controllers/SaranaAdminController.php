<?php

namespace App\Http\Controllers;

use App\Models\SaranaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaranaAdminController extends Controller
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
        return view('admin.sarana.create_sarana')->with('url_form', route('saranaadmin.store'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:225',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'ket' => 'nullable|string|max:225',
        ]);

        $judul = $request->input('judul');
        $ket = $request->input('ket');

        // Handle file upload if 'foto' field is present
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $filePath = 'images/' . $fileName;
            $file->move('storage', $filePath);
        } else {
            $filePath = null;
        }

        $sarana = new SaranaModel();
        $sarana->judul = $judul;
        $sarana->foto = $filePath;
        $sarana->ket = $ket;
        $sarana->save();

        return redirect()->back()->with('success', 'Sarana created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Implementation for show method if needed
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
        return view('admin.sarana.create_sarana')->with('sarana', $sarana);
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
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $sarana = SaranaModel::find($id);

        if ($request->hasFile('foto')) {
            // Delete old foto if it exists
            if ($sarana->foto && file_exists(storage_path('app/public/' . $sarana->foto))) {
                Storage::delete('public/' . $sarana->foto);
            }

            // Upload new foto
            $file = $request->file('foto');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $filePath = 'images/' . $fileName;
            $file->move('storage', $filePath);

            $sarana->foto = $filePath;
        }

        $sarana->judul = $request->input('judul');
        $sarana->ket = $request->input('ket');
        $sarana->save();

        return redirect()->route('saranaadmin.index')
        ->with('success', 'Sarana berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sarana = SaranaModel::find($id);

        // Delete the associated foto if it exists
        if ($sarana->foto && file_exists(storage_path('app/public/' . $sarana->foto))) {
            Storage::delete('public/' . $sarana->foto);
        }

        $sarana->delete();

        return redirect('saranaadmin')->with('success', 'Data sarana berhasil dihapus');
    }
}
