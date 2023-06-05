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
        return view('user.sarana')
        ->with('sarana', $sarana);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.sarana')
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
            'foto' => 'nullable|image',
            'ket' => 'nullable|string|max:225',
        ]);

        $data = $request->only(['judul', 'ket']);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto')->store('public/images');
            $data['foto'] = $foto;
        }

        SaranaModel::create($data);

        return redirect()->route('saranas.index')->with('success', 'Sarana created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('saranas.show', compact('sarana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        return redirect('saranaadmin')
            ->with('success', 'Data sarana Berhasil Dihapus');
    }
}
