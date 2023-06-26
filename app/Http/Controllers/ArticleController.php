<?php

namespace App\Http\Controllers;

use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function detail($artikel)
    {
        $artikel = ArtikelModel::where(['url' => $artikel])->firstOrFail();

        return view('user.artikel.detail')
            ->with('artikel', $artikel);
    }
}
