<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use DB;

class RegistrasiMemberController extends Controller
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
        $users = DB::table('users')
            ->join('tb_admin', 'users.id', '=', 'tb_admin.id_user')
            ->select('users.*', 'tb_admin.admin')
            ->where('users.id','=','2')
            ->get();
        return view('admin.registrasimember', ['datas' => $users]);
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
        $user = Admin::find($id);

        $user->admin = $request->admin;

        $user->save();

        $users = DB::table('users')
            ->join('tb_admin', 'users.id', '=', 'tb_admin.id_user')
            ->select('users.*', 'tb_admin.admin')
            ->where('users.id','=','2')
            ->get();
        return view('admin.registrasimember', ['datas' => $users]);
    }

}
