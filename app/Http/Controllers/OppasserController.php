<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class OppasserController extends Controller
{

    public function index()
    {
        return view('oppassers.index' ,[ 'oppassers' => \App\Models\Oppasser::all()]);
    }

    public function show($id)
    {
        return view('oppassers.show' ,[
            'oppasser' => \App\Models\Oppasser::find($id),
            'reviews' => \App\Models\Review::where('oppasser', $id)->get()
    ]);
    }

    public function create()
    {
        return view('oppassers.create');
    }

    public function store(Request $request, \App\Models\Oppasser $oppasser){
        $oppasser->naam = $request->input('naam');
        $oppasser->email = $request->input('email');
        $oppasser->foto = $request->input('foto');
        $oppasser->beschrijving = $request->input('beschrijving');
        $oppasser->user = Auth::user()->id;

        $oppasser->save();

        DB::table('users')->where('id', Auth::user()->id)->update(['hasPage'=> 'yes']);

        return redirect('/dieren');

        // try{
        //     $oppasser->save();
        //     return redirect('/oppassers');
        // }catch(Exception $e){
        //     return redirect('/oppassers/create');
        // }
    }
}
