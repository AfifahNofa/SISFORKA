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
    public function perArtikel()
    {
        return view('user.perArtikel');
    }
    public function perArtikel1()
    {
        return view('user.perArtikel1');
    }
    public function perArtikel2()
    {
        return view('user.perArtikel2');
    }
    public function ppdb()
    {
        return view('user.ppdb');
    }
    public function showKalender()
    {
        $kalender = KalenderModel::all();

        return view('user.kalender', ['kalender' => $kalender]);
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
    // public function dataguru()
    // {
    //     return view('user.dataguru');
    // }
    // public function datasiswa()
    // {
    //     return view('user.datasiswa');
    // }
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

    public function showppdb()
    {
        $ppdb = ppdbModel::all();

        return view('user.datappdb', ['ppdb' => $ppdb]);
    }
    public function showBaca()
    {
        $ekstrakulikuler = EkstraModel::all();
        return view('user.ekstra.baca')
            ->with('ekstrakulikuler', $ekstrakulikuler);
    }
    public function showPramuka()
    {
        $ekstrakulikuler = EkstraModel::all();
        return view('user.ekstra.pramuka')
            ->with('ekstrakulikuler', $ekstrakulikuler);
    }
    public function showKarate()
    {
        $ekstrakulikuler = EkstraModel::all();
        return view('user.ekstra.karate')
            ->with('ekstrakulikuler', $ekstrakulikuler);
    }
    public function showMenari()
    {
        $ekstrakulikuler = EkstraModel::all();
        return view('user.ekstra.menari')
            ->with('ekstrakulikuler', $ekstrakulikuler);
    }
    public function showTik()
    {
        $ekstrakulikuler = EkstraModel::all();
        return view('user.ekstra.tik')
            ->with('ekstrakulikuler', $ekstrakulikuler);
    }
    public function showDrumband()
    {
        $ekstrakulikuler = EkstraModel::all();
        return view('user.ekstra.drumband')
            ->with('ekstrakulikuler', $ekstrakulikuler);
    }
    public function showPpdb()
    {
        $ppdb = PpdbModel::all();
        return view('user.datappdb')
            ->with('ppdb', $ppdb);
    }

    // public function showBaca()
    // {
    //     $ekstrakulikuler = EkstraModel::all();
    //     return view('user.ekstra.baca')
    //     ->with('ekstrakulikuler', $ekstrakulikuler);
    // }
    // public function showBaca()
    // {
    //     $ekstrakulikuler = EkstraModel::all();
    //     return view('user.ekstra.baca')
    //     ->with('ekstrakulikuler', $ekstrakulikuler);
    // }
    // public function showEkstra()
    // {
    //     $ekstrakulikuler = EkstraModel::all();
    //     return view('user.dataekstra')
    //         ->with('ekstrakulikuler', $ekstrakulikuler);
    // }
}
