@extends('default')
@section('title')
    {{"Alle Dieren"}}
@endsection
@section('content')
<h1 class="page-header">Dieren</h1>
<article class="filterArticle">
    <h2 class="filterArticle__heading">Filters:</h2>
    <section class="filterArticle__section u-grid-10">
        <section class="filterArticle__wrapper u-center-v">
            <label class="filterArticle__label" for="Hond">Hond</label>
            <input class="filterArticle__input" type="checkbox" name="Hond" id="HondCheck">
        </section>
        <section class="filterArticle__wrapper u-center-v">
            <label class="filterArticle__label" for="Kat">Kat</label>
            <input class="filterArticle__input" type="checkbox" name="Kat" id="KatCheck">
        </section>
        <section class="filterArticle__wrapper u-center-v">
            <label class="filterArticle__label" for="Vogel">Vogel</label>
            <input class="filterArticle__input" type="checkbox" name="Vogel" id="VogelCheck">
        </section>
        <section class="filterArticle__wrapper u-center-v">
            <label class="filterArticle__label" for="Overig">Overig</label>
            <input class="filterArticle__input" type="checkbox" name="Overig" id="OverigCheck">
        </section>
        <section class="filterArticle__wrapper">
            <button class="filterArticle__button" onclick="checkFun()" >Ga</button>
        </section>
    </section>
</article>
<ul class="cardsWrapper u-grid-12 u-grid-gap-4">
    @foreach ($dieren as $dier)
        @include('dieren.components.dierCard--index')
    @endforeach
</ul>
@endsection
