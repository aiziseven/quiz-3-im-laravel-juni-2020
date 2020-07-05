<?php

namespace App\Http\Controllers;

use App\ArtikelModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = ArtikelModel::all();
        return view("artikel", ["artikel" => $artikel]);
    }

    public function create()
    {
        return view("artikeladd");
    }

    public function insert(Request $request)
    {
        $slug = strtolower(preg_replace('/\s+/', '-', $request->aJudul));

        ArtikelModel::create([
            "judul" => strtoupper($request->aJudul),
            "isi" => $request->aIsi,
            "slug" => $slug,
            "tag" => strtolower($request->aTag)
        ]);

        return redirect("/artikel");
    }

    public function edit($id)
    {
        $artikel = ArtikelModel::where("id", $id)->get();
        return view("artikeledit", ["artikel" => $artikel]);
    }

    public function update($id, Request $request)
    {
        $slug = strtolower(preg_replace('/\s+/', '-', $request->aJudul));

        $artikel = ArtikelModel::find($id);
        $artikel->judul = strtoupper($request->aJudul);
        $artikel->isi = $request->aIsi;
        $artikel->slug = $slug;
        $artikel->tag = strtolower($request->aTag);
        $artikel->save();
        return redirect("/artikel");
    }

    public function detail($id)
    {
        $artikel = ArtikelModel::where("id", $id)->get();
        return view("artikeldetail", ["artikel" => $artikel]);
    }

    public function deleteconfirm($id)
    {
        $artikel = ArtikelModel::where("id", $id)->get();
        return view("artikeldelete", ["artikel" => $artikel]);
    }

    public function delete($id)
    {
        $artikel = ArtikelModel::find($id);
        $artikel->delete();
        return redirect("/artikel");
    }
}
