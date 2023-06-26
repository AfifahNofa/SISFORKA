<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use App\Models\EkstraModel;
use App\Models\GuruModel;
use App\Models\KalenderModel;
use App\Models\ppdbModel;
use App\Models\PrestasiModel;
use App\Models\SaranaModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // return view('user.index');
        $artikel = ArtikelModel::all();
        return view('user.index', ['artikel' => $artikel]);
    }
    public function showDataekstra()
    {
        $dataekstra = EkstraModel::all();

        return view('user.dataekstra', ['dataekstra' => $dataekstra]);
    }
    public function visimisi()
    {
        return view('user.visimisi');
    }

    public function showArtikel()
    {
        $artikel = ArtikelModel::all();

        return view('user.artikel', ['artikel' => $artikel]);
    }

    public function ppdb()
    {
        return view('user.ppdb');
    }
    public function showKalender($tahun = null)
    {
        $tahun_ajaran = KalenderModel::groupBy('tahun_ajaran')
            ->select('tahun_ajaran')
            ->orderBy('tahun_ajaran', 'desc')
            ->get()
            ->pluck('tahun_ajaran');

        if($tahun == null) {
            $tahun = $tahun_ajaran->first();
        }

        $kalender = KalenderModel::where(['tahun_ajaran' => $tahun])->get();

        return view('user.datakalender', [
            'kalender' => $kalender,
            'tahun_ajaran' => $tahun_ajaran,
        ]);
    }

    public function galeri()
    {
        return view('user.galeri');
    }
    public function perGaleri()
    {
        return view('user.perGaleri');
    }
    public function kontak()
    {
        return view('user.kontak');
    }

    public function showSarana()
    {
        $sarana = SaranaModel::all();

        return view('user.datasarana', ['sarana' => $sarana]);
    }
    public function dataprestasi()
    {
        return view('user.dataprestasi');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function showGuru()
    {
        $guru = GuruModel::all();

        return view('user.dataguru', ['guru' => $guru]);
    }
    public function showSiswa()
    {
        $siswa = SiswaModel::all();

        return view('user.datasiswa', ['siswa' => $siswa]);
    }
    public function showPrestasi()
    {
        $prestasi = PrestasiModel::all();

        return view('user.dataprestasi', ['prestasi' => $prestasi]);
    }


    public function showEkstra()
    {
        $ekstrakulikuler = EkstraModel::all();
        return view('user.ekstra.ekstra')
            ->with('ekstrakulikuler', $ekstrakulikuler);
    }
    public function showPpdb()
    {
        $ppdb = ppdbModel::all();
        return view('user.datappdb')
            ->with('ppdb', $ppdb);
    }
}
