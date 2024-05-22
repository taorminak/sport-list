<x-layout>
    <x-slot:heading>Sports Page</x-slot:heading>
    <div class="text-center min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
        <ul>
       @foreach ($sports as $sport) 
        <li>
            <a href="/sports/{{ $sport['id']}}">
            <strong>{{$sport["name"]}}</strong> : see all matches.</a>
        </li>
        @endforeach
          </ul>
     </div>
    
    
</x-layout>