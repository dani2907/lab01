<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kkp;
use DB;

class AksesKkpController extends Controller
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
    	$kkps = Kkp::all();

        return view('admin.akseskkp.akseskkp', ['datas' => $kkps]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
        //
        $data = Kkp::find($id);

        return view('admin.akseskkp.addkkp', ['data' => $data]);
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
        $kkp = Kkp::find($id);

        $kkp->penguji = $request->penguji;
        $kkp->pembimbing = $request->pembimbing;
        $kkp->status = $request->status;
        $kkp->pesan = $request->pesan;

        $kkp->save();

        return view('admin.akseskkp.addkkp', ['data' => $kkp]);
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
        $kkp = Kkp::find($id);

        $kkp->delete();

        
    	$kkps = Kkp::all();

        return view('admin.akseskkp.akseskkp', ['datas' => $kkps]);
     }

}
