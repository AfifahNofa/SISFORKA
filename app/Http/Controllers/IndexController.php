<?php

namespace App\Http\Controllers;

use App\Models\EkstraModel;
use App\Models\GuruModel;
use App\Models\PrestasiModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function dataekstra()
    {
        return view('user.dataekstra');
    }
    public function visimisi()
    {
        return view('user.visimisi');
    }
    public function baca()
    {
        return view('user.ekstra.baca');
    }
    public function drumband()
    {
        return view('user.ekstra.drumband');
    }
    public function karate()
    {
        return view('user.ekstra.karate');
    }
    public function menari()
    {
        return view('user.ekstra.menari');
    }
    public function pramuka()
    {
        return view('user.ekstra.pramuka');
    }
    public function tik()
    {
        return view('user.ekstra.tik');
    }
    public function artikel()
    {
        return view('user.artikel');
    }
    public function perArtikel()
    {
        return view('user.perArtikel');
    }
    public function ppdb()
    {
        return view('user.ppdb');
    }
    public function kalender()
    {
        return view('user.kalender');
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
    public function sarana()
    {
        return view('user.sarana');
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
