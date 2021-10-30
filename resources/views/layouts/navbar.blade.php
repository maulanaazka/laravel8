{{-- layout komponen --}}
<ul class="navbar">
    {{-- data dinamis yang diambil dari class component app/view/components/navbar --}}
    @foreach ($navbar as $name => $url)
        <li><a href="{{$url}}">{{$name}}</a></li>
    @endforeach
</ul>