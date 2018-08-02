<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AksesPenguman;

class AksesPengumanController extends Controller
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
        $pengumans = AksesPenguman::all();

        return view('admin.aksespenguman.aksespenguman', ['datas' => $pengumans]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data = null;

       return view('admin.aksespenguman.addpenguman', ['data' => $data]); 
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penguman = AksesPenguman::create([
            'judul_penguman' => $request->judul_penguman,
            'isi_penguman' => $request->isi_penguman,
        ]);

       $data = null;

       return view('admin.aksespenguman.addpenguman', ['data' => $data]); 

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
        $penguman = AksesPenguman::find($id);

        echo json_encode($penguman);

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
        $penguman = AksesPenguman::find($id);

       return view('admin.aksespenguman.addpenguman', ['data' => $penguman]); 
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
        $penguman = AksesPenguman::find($id);

        $penguman->judul_penguman = $request->judul_penguman;
        $penguman->isi_penguman = $request->isi_penguman;
        $penguman->save();


       return view('admin.aksespenguman.addpenguman', ['data' => $penguman]); 

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
        $penguman = AksesPenguman::find($id);

        $penguman->delete();

        $pengumans = AksesPenguman::all();

        return view('admin.aksespenguman.aksespenguman', ['datas' => $pengumans]);

    }
}
