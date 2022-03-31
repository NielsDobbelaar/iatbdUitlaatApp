@extends('default')
@section('title')
    {{$dier->naam}}
@endsection
@section('content')
    <h1 class="page-header">{{$dier->naam}}</h1>
    @include('dieren.components.dierCard--show')
@endsection
