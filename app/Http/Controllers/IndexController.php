<?php

namespace App\Http\Controllers;

use App\Models\GuruModel;
use App\Models\SiswaModel;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function ekstrakulikuler()
    {
        return view('user.ekstrakulikuler');
    }
    public function visimisi()
    {
        return view('user.visimisi');
    }
    public function karate()
    {
        return view('user.ekstra.karate');
    }
    public function menari()
    {
        return view('user.ekstra.menari');
    }
    public function inggris()
    {
        return view('user.ekstra.inggris');
    }
    public function tik()
    {
        return view('user.ekstra.tik');
    }
    public function twisada()
    {
        return view('user.ekstra.twisada');
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
    public function dataguru()
    {
        return view('user.dataguru');
    }
    public function datasiswa()
    {
        return view('user.datasiswa');
    }
    public function sarana()
    {
        return view('user.sarana');
    }
    public function prestasi()
    {
        return view('user.prestasi');
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
}
