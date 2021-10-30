<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Code-Verse</title>
    {{-- menambah file css dari public/css/app.css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    {{-- memanggil file navbar.blade dalam folder components --}}
    <x-navbar></x-navbar>
    
    {{ $slot }}

    {{-- menambah file js dari public/js/app.js --}}
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>