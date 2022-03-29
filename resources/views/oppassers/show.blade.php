@extends('default')
@section('title')
    {{$oppasser->naam}}
@endsection
@section('content')
    <h1 class="page-header">Oppasser</h1>
    @include('oppassers.components.oppasserCard--show')
@endsection
