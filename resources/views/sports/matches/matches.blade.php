<x-layout>
    <x-slot:heading>Sport</x-slot:heading>
    <h2 class="text-center">All matches</h2>

    <div class="text-center min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
 <ul>
        @foreach($matches as $match)
            <li><a href="/sports/matches/{{ $match['id']}}">
                {{ $match->match_name }} - {{ $match->match_start_date }} - {{ $match->score }}</li>
            <p >
                <div class="text-center min-h-[10px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
  <x-button href="/sports/matches/{{ $match->id }}/edit">Edit match</x-button>
                </div>
          
            </p>
        @endforeach
    </ul>
    </div>

   


</x-layout>