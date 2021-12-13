<x-app-layout title="Contact Page">
    <h1>Contact</h1>

    {{-- method post otomatis membaca dan mengirim ke route contact store --}}
    <form action="/contact" method="post"> 
        @csrf

        <button type="submit">Send</button>
    </form>
</x-app-layout>