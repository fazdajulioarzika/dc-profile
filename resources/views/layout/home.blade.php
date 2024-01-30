<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('layout.partials.link')

    <title>{{ $title }}</title>
</head>

<body id="top">

    @include('layout.partials.navbar')
    @yield('home')
    @include('layout.partials.footer')
    <script id="dsq-count-scr" src="//dewa-computer.disqus.com/count.js" async></script>
</body>
@include('layout.partials.script')

</html>
