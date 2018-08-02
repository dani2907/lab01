<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AksesAgenda;

class AksesAgendaController extends Controller
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
        $agendas = AksesAgenda::all();

        return view('admin.aksesagenda.aksesagenda', ['datas' => $agendas]);
    }

    public function viewadd()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = null;

        return view('admin.aksesagenda.addagenda', ['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $agenda = AksesAgenda::create([
            'judul_agenda' => $request->judul_agenda,
            'tanggal_agenda' => $request->tanggal_agenda
        ]);

        $data = null;

        return view('admin.aksesagenda.addagenda', ['data' => $data]);
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
        $data = AksesAgenda::find($id);

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
        $data = AksesAgenda::find($id);

        return view('admin.aksesagenda.addagenda', ['data' => $data]);
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
        $agenda = AksesAgenda::find($id);

        $agenda->judul_agenda = $request->judul_agenda;
        $agenda->tanggal_agenda = $request->tanggal_agenda;

        $agenda->save();


        return view('admin.aksesagenda.addagenda', ['data' => $agenda]);
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
        $agenda = AksesAgenda::find($id);

        $agenda->delete();

        $agendas = AksesAgenda::all();

        return view('admin.aksesagenda.aksesagenda', ['datas' => $agendas]);
    }
}
