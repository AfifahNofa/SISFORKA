<?php

namespace App\Http\Controllers;

use App\Models\EkstraModel;
use App\Models\JadwalEkstraModel;
use App\Models\PembinaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PembinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembina = PembinaModel::with('ekstrakulikuler')->get();
        $pembinaex = PembinaModel::with('jadwalekstra')->get();
        return view('admin.pembina.pembina')
                ->with('pembina', $pembina)
                ->with('pembinaex', $pembinaex);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ekstrakulikuler = EkstraModel::all();
        $jadwalekstra = JadwalEkstraModel::all();
         return view('admin.pembina.create_pembina')
        ->with('ekstrakulikuler', $ekstrakulikuler)
        ->with('jadwalekstra', $jadwalekstra)
        ->with('url_form', route('pembina.store'));
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
            'kode' => 'required|string|max:4|unique:pembina,kode',
            'nama_pembina' => 'required|string|max:225',
            'ttl' => 'required|string|max:225',
            'alamat' => 'required|string|max:225',
            'no_hp' => 'required|string|max:15',
            'ekstrakulikuler_id' => 'required',
            'jadwalekstra_id' => 'required',
        ]);

 
        $pembina = new PembinaModel();
        $pembina->kode = $request->get('kode');
        $pembina->nama_pembina = $request->get('nama_pembina');
        $pembina->ttl = $request->get('ttl');
        $pembina->alamat = $request->get('alamat');
        $pembina->no_hp = $request->get('no_hp');
        

        //jika data berhasil ditambahkan, akan kembali ke halaman utama

        $ekstrakulikuler = new EkstraModel;
        $ekstrakulikuler->id = $request->get('ekstrakulikuler_id');
        $jadwalekstra = new JadwalEkstraModel();
        $jadwalekstra->id = $request->get('jadwalekstra_id');
        
        $pembina->ekstrakulikuler()->associate($ekstrakulikuler);
        $pembina->jadwalekstra()->associate($jadwalekstra);
        $pembina->save();

        return redirect('pembina')
        ->with('success', 'Data Pembina Berhasil Ditambahkan');
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
        $pembina = PembinaModel::with('ekstrakulikuler')->where('id', $id)->first();
        $pembinaex = PembinaModel::with('jadwalekstra')->where('id', $id)->first();
        $ekstrakulikuler = EkstraModel::all(); //mendapatkan data dari tabel ekstrakurikuler
        $jadwalekstra = JadwalEkstraModel::all();
        return view('admin.pembina.create_pembina')
                    ->with('pembina', $pembina)
                    ->with('pembinaex', $pembinaex)
                    ->with('ekstrakulikuler', $ekstrakulikuler)
                    ->with('jadwalekstra', $jadwalekstra)
                    ->with('url_form', url('/pembina/'. $id));
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
        'kode' => 'required|string|max:4|unique:pembina,kode,'.$id,
        'nama_pembina' => 'required|string|max:225',
        'ttl' => 'required|string|max:225',
        'alamat' => 'required|string|max:225',
        'no_hp' => 'required|string|max:15',
        'ekstrakulikuler_id' => 'required',
        'jadwalekstra_id' => 'required',
    ]);

    // Mengambil data pembina yang ada berdasarkan $id
    $pembina = PembinaModel::find($id);

    // Mengisi data pembina dengan nilai baru
    $pembina->kode = $request->get('kode');
    $pembina->nama_pembina = $request->get('nama_pembina');
    $pembina->ttl = $request->get('ttl');
    $pembina->alamat = $request->get('alamat');
    $pembina->no_hp = $request->get('no_hp');
    $pembina->save();

    $ekstrakulikuler = new EkstraModel;
    $ekstrakulikuler->id = $request->get('ekstrakulikuler_id');
    $jadwalekstra = new JadwalEkstraModel();
    $jadwalekstra->id = $request->get('jadwalekstra_id');
        
    $pembina->ekstrakulikuler()->associate($ekstrakulikuler);
    $pembina->jadwalekstra()->associate($jadwalekstra);
    $pembina->save();


    return redirect('pembina')
        ->with('success', 'Pembina Berhasil Diedit');
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PembinaModel::where('id', '=', $id)->delete();
        return redirect('pembina')
            ->with('success', 'Data Pembina Berhasil Dihapus');
    }
}
