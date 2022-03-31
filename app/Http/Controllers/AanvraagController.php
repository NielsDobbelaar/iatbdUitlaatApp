<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class AanvraagController extends Controller
{

    public function store(Request $request, \App\Models\Aanvraag $aanvraag){
        $aanvraag->oppasser = \App\Models\Oppasser::where('user', Auth::user()->id)->first()->id;
        $aanvraag->dier = $request->dier;
        $aanvraag->naam = \App\Models\Oppasser::where('user', Auth::user()->id)->first()->naam;
        $aanvraag->geaccepteerd = 'no';

        $aanvraag->save();

        return redirect('/dieren');

    }
    public function edit($id)
    {
        DB::table('aanvragen')->where('id', $id)->update(['geaccepteerd'=> 'yes']);

        \App\Models\Aanvraag::where('id', '!=', $id)->delete();

        return redirect(url()->previous());
    }

    public function destroy($id)
    {
        \App\Models\Aanvraag::where('id', $id)->delete();

        return redirect(url()->previous());
    }
}
