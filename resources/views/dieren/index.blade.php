@extends('default')
@section('title')
    {{"Alle Dieren"}}
@endsection
@section('content')
<h1 class="page-header">Dieren</h1>
<ul class="cardsWrapper u-grid-12 u-grid-gap-4">
    @foreach ($dieren as $dier)
        @include('dieren.components.dierCard--index')
    @endforeach
</ul>
@endsection
