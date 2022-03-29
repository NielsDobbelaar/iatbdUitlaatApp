@extends('default')
@section('title')
    {{"Alle Oppassers"}}
@endsection
@section('content')
<h1 class="page-header">Oppassers</h1>
<ul class="cardsWrapper u-grid-12 u-grid-gap-4">
    @foreach ($oppassers as $oppasser)
        @include('oppassers.components.oppasserCard--index')
    @endforeach
</ul>
@endsection
