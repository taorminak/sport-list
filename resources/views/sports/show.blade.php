<x-layout>
    <x-slot:heading>Sport</x-slot:heading>
    <h2>{{ $sport["name"]}}</h2>

    <ul>
        @foreach($sport->matches as $match)
            <li>{{ $match->match_name }} - {{ $match->match_start_date }} - {{ $match->score }}</li>
        @endforeach
    </ul>
</x-layout>