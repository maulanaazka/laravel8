<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Code-Verse</title>
    {{-- menambah file css dari public/css/app.css --}}
    {{-- tidak menggunakan asset agar tidak selalu clear cache --}}
    <link rel="stylesheet" href="/css/app.css">

    {{-- fungsi isset nya di pindahkan ke controller applayout, kecuali tidak memiliki class components --}}
    {{ $styles }}

</head>
<body>

    {{-- memanggil file navbar.blade dalam folder components --}}
    <x-navbar></x-navbar>
    <div class="pt-4">

        {{ $slot }}

    </div>

    {{-- menambah file js dari public/js/app.js --}}
    <script src="/js/app.js"></script>
</body>
</html>
