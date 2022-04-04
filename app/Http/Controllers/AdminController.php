<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function create()
    {
        return view('admin.create', ['users' => \App\Models\User::where('name', '!=', 'admin')->where('blocked', '!=', 'yes')->get()]);
    }

    public function store(Request $request){
        DB::table('users')->where('id', $request->input('user'))->update(['blocked'=> 'yes']);
        \App\Models\Dier::where('eigenaar', $request->input('user'))->delete();
        \App\Models\Oppasser::where('user', $request->input('user'))->delete();


        return redirect(url()->previous());

    }

}
