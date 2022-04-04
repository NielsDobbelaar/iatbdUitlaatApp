@extends('default')
@section('title')
    {{"Schrijf een review"}}
@endsection
@section('content')
<article class="create-form">
    <h1 class="page-header">Schrijf een revieuw</h1>
    <form class="create-form__form" action="/reviews" method="POST">
        @csrf
        <input type='hidden' name='oppasser' id="oppasser" value='{{$oppasser->id}}'>
        <section class="create-form__section">
            <label for="review">Schrijf een revieuw over uw ervaring met {{$oppasser->naam}}.</label>
            <textarea class="create-form__input create-form__input--big" name="review" id="review" ></textarea>
        </section>

        <section class="create-form__section u-center-h">
            <button class="create-form__button" type="submit">Post plaatsen</button>
        </section>
    </form>
</article>
@endsection
