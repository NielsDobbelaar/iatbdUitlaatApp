@extends('default')
@section('title')
    {{$dier->naam}}
@endsection
@section('content')
    <h1 class="page-header"></h1>
    @include('dieren.components.dierCard--show')
@endsection
