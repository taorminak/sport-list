<x-layout>
    <x-slot:heading>{{ $match->sport }}</x-slot:heading>

    <ul>
        <li> 
            Match Name: {{ $match->match_name }}
        </li>
        <li> 
            Match Start Date: {{ $match->match_start_date }}
        </li>
        <li> 
            Score: {{ $match->score }}
        </li>
    </ul>
</x-layout>