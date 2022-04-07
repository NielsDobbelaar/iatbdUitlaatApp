@extends('default')
@section('title')
    {{"add pizza"}}
@endsection
@section('content')
<article class="create-form">
    <h1 class="page-header">Blokkeer een gebruiker</h1>
    <form class="create-form__form" action="/admin" method="POST">
        @csrf
        <section class="create-form__section">
            <label for="user">user</label>
            <select class="create-form__input" name="user" id="user">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}} - {{$user->email}}</option>
                @endforeach
            </select>
        </section>
        <section class="create-form__section u-center-h">
            <button class="create-form__button" type="submit">Blokkeren</button>
        </section>
    </form>
</article>
@endsection
