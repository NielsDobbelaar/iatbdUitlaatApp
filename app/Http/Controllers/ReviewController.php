<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{

    public function create($id)
    {
        return view('reviews.create', ['oppasser' => \App\Models\Oppasser::find($id)]);
    }

    public function store(Request $request, \App\Models\Review $review){
        $review->oppasser = $request->input('oppasser');
        $review->review = $request->input('review');
        $review->user = Auth::user()->name;

        $review->save();

        return redirect('/dieren/' . \App\Models\Dier::where('eigenaar', Auth::user()->id)->first()->id);

        // try{
        //     $oppasser->save();
        //     return redirect('/oppassers');
        // }catch(Exception $e){
        //     return redirect('/oppassers/create');
        // }
    }

}
