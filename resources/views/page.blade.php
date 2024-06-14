@extends('app')

@section('head')
    <meta property="og:type" content="page">
@endsection

@section('header')
@endsection

@section('content')
    @include('pages/' . $content->view_name)
@endsection

@section('footer')
@endsection

