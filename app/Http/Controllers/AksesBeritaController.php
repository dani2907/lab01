<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AksesBerita;
use DB;

class AksesBeritaController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aksesberita = AksesBerita::all();

        return view('admin.aksesberita.aksesberita', ['datas' => $aksesberita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = null;

        return view('admin.aksesberita.addberita', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->kategori_top;
        $populer = 0;
        $top = 0;

        if ($request->kategori_populer == 1) {
            $populer = 1;
        }

        if ($request->kategori_top == 1) {
            $top = 1;
        }

        $path = $request->gambar->store('public/gambar_berita');

        $file = AksesBerita::create([
            'judul_berita' => $request->judul_berita,
            'kategori_top' => $top,
            'kategori_populer' => $populer,
            'isi_berita' => $request->isi_berita,
            'gambar' => $path
        ]);

        $data = null;

        return view('admin.aksesberita.addberita', ['data' => $data]);
    
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
        $data = AksesBerita::find($id);

        echo json_encode($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = AksesBerita::find($id);

        return view('admin.aksesberita.addberita', ['data' => $data]);

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
        //
        $populer = 0;
        $top = 0;

        if ($request->kategori_populer == 1) {
            $populer = 1;
        }

        if ($request->kategori_top == 1) {
            $top = 1;
        }
    
        $berita = AksesBerita::find($id);

        $berita->judul_berita = $request->judul_berita;
        $berita->kategori_populer = $populer;
        $berita->kategori_top = $top;
        if ($request->isi_berita != null) {
            $berita->isi_berita = $request->isi_berita;
        }

        $berita->save();

        return view('admin.aksesberita.addberita', ['data' => $berita]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $berita = AksesBerita::find($id);

        $berita->delete();

        $aksesberita = AksesBerita::all();

        return view('admin.aksesberita.aksesberita', ['datas' => $aksesberita]);

    }
}
