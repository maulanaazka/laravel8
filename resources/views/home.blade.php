@extends('layouts.app', ['title' => 'Home Page'])

@section('content')
    
    {{-- anonymous component => dengan persyaratan harus ada folder components --}}
    <x-alert>
        
        <x-slot name='title'>
            Header Component with <strong>Strong</strong> tag 
        </x-slot>
        
    Ini adalah children

        @slot('footer')
            Footer
        @endslot
        
    </x-alert>

    <p>
        Ini adalah halaman beranda
    </p>
@endsection