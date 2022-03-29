@extends('default')
@section('title')
    {{"add pizza"}}
@endsection
@section('content')
<article class="create-form">
    <h1 class="page-header">Maak een oppas advertentie</h1>
    <form class="create-form__form" action="/oppassers" method="POST">
        @csrf
        <section class="create-form__section">
            <label for="naam">Naam</label>
            <input class="create-form__input" name="naam" id="naam" type="text">
        </section>

        <section class="create-form__section">
            <label for="email">E-Mail</label>
            <input class="create-form__input" name="email" id="email" type="text">
        </section>

        <section class="create-form__section">
            <label for="foto">Link naar een foto van uw leefomgeving</label>
            <input class="create-form__input" name="foto" id="foto" type="text">
        </section>

        <section class="create-form__section">
            <label for="beschrijving">Beschrijving van u, uw woonomgeving en ervaring.</label>
            <textarea class="create-form__input create-form__input--big" name="beschrijving" id="beschrijving" ></textarea>
        </section>

        <section class="create-form__section u-center-h">
            <button class="create-form__button" type="submit">Post plaatsen</button>
        </section>
    </form>
</article>
@endsection
