    @extends('app')

    @section('head')
        @if(!empty($content->author_name))
            <meta name="author" content="{{ $content->author_name }}">
        @endif
        @if(!empty($content->title))
            <meta name="dcterms.title" content="{{ $content->title }}">
        @endif
        @if(!empty($content->author_profile))
            <meta name="dcterms.creator" content="{{ $content->author_profile }}">
        @endif
        @if(!empty($content->publication_date))
            <meta name="dcterms.date" content="{{ date('c', strtotime($content->publication_date)) }}">
        @endif
        @if(!empty($content->publication_date))
            <meta property="article:modified_time" content="{{ date('c', strtotime($content->publication_date)) }}">
        @endif
        <meta property="og:type" content="article">
    @endsection

    @section('header')
    @endsection

    @section('content')
        @include('articles/' . $content->view_name)
    @endsection

    @section('footer')
    @endsection

