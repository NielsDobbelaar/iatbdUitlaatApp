@extends('default')
@section('title')
    {{"maak een aanbieding"}}
@endsection
@section('content')
<article class="create-form">
    <h1 class="page-header">Maak een oppas advertentie voor uw dier!</h1>
    <form class="create-form__form" action="/dieren" method="POST">
        @csrf

        <section class="create-form__section">
            <label for="naam">Naam</label>
            <input class="create-form__input" name="naam" id="naam" type="text">
        </section>

        <section class="create-form__section">
            <label for="diersoort">diersoort</label>
            <select class="create-form__input" name="diersoort" id="diersoort">
                @foreach ($dierSoorten as $soort)
                    <option value="{{$soort->soort}}">{{$soort->soort}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="startdatum">Vanaf</label>
            <input class="create-form__input" name="startdatum" id="startdatum" type="date">
        </section>

        <section class="create-form__section">
            <label for="einddatum">tot</label>
            <input class="create-form__input" name="einddatum" id="einddatum" type="date">
        </section>

        <section class="create-form__section u-grid-12">
            <label class="create-form__label--number" for="uurtarief">Uurtarief</label>
            <p class="create-form__p--number">&euro;</p>
            <input type="number" class="create-form__input--number" id="uurtarief" placeholder="0" name="uurtarief" min="1">
        </section>

        <section class="create-form__section">
            <label  for="foto">Foto</label>
            <input class="create-form__input" name="foto" id="foto" type="text">
        </section>

        <section class="create-form__section">
            <label for="beschrijving">Beschrijving</label>
            <textarea class="create-form__input create-form__input--big" name="beschrijving" id="beschrijving" ></textarea>
        </section>

        <section class="create-form__section u-center-h">
            <button class="create-form__button" type="submit">Post aanmaken</button>
        </section>
    </form>
</article>
@endsection
