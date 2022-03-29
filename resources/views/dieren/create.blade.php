@extends('default')
@section('title')
    {{"add pizza"}}
@endsection
@section('content')
<article class="create-form a-popup">
    <form class="create-form__form" action="/pizza" method="POST">
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
            <label for="start-datum">Vanaf</label>
            <input class="create-form__input" name="start-datum" id="start-datum" type="date">
        </section>

        <section class="create-form__section">
            <label for="eind-datum">tot</label>
            <input class="create-form__input" name="eind-datum" id="eind-datum" type="date">
        </section>

        <input type="number" id="uurtarief" name="uurtarief" min="1">

        <section class="create-form__section">
            <label for="naam">Naam</label>
            <input class="create-form__input" name="naam" id="naam" type="text">
        </section>

        <section class="create-form__section">
            <label for="description">Beschrijving</label>
            <textarea class="create-form__input create-form__input--big" name="description" id="description" ></textarea>
        </section>

        <section class="create-form__section">
            <button class="create-form__button" type="submit">Pizza aanmaken</button>
        </section>
    </form>
</article>
@endsection
