<!DOCTYPE html>
<html lang="{{ $content->lang_iso_639_1 }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $content->meta_title }} - {{ config('app.name') }}</title>
        <meta name="description" content="{{ $content->meta_description }}">
        @if(!empty($content->robots))
            <meta name='robots' content='{{ $content->robots }}'>
        @endif
        @if(!empty($content->rel_canonical))
            <link rel="canonical" href="{{ $content->rel_canonical }}">
        @endif
        @if(!empty($content->rel_icon))
            <link rel="icon" href="{{ $content->rel_icon }}">
        @endif
        @if(!empty($content->locale))
            <meta property="og:locale" content="{{ $content->locale }}">
        @endif
        @if(!empty($content->meta_title))
            <meta property="og:title" content="{{ $content->meta_title }}">
        @endif
        @if(!empty($content->meta_description))
            <meta property="og:description" content="{{ $content->meta_description }}">
        @endif
        <meta property="og:url" content="{{ Request::url() }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <link rel="stylesheet" href="style.css">
        @yield('head')
    {{--    What to do with og:image? Have Image as content property?--}}
    {{--    <meta property="og:image" content="">--}}
    {{--    <meta property="og:image:width" content="">--}}
    {{--    <meta property="og:image:height" content="">--}}
    {{--    <meta property="og:image:type" content="image/webp">--}}
    </head>
    <body>
        <header>
            @yield('header')
        </header>
        <main>
            @yield('content')
        </main>
        <footer>
            @yield('footer')
        </footer>
    </body>
</html>
