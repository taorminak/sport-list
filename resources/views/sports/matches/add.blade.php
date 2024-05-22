<x-layout>
    <x-slot name="heading" >Add an Event</x-slot>
    
    

    <form method="POST" action="/sports/matches" class="w-full max-w-lg ml-10">
        @csrf 

        <div class="flex flex-wrap -mx-3 mb-6">
        @if(isset($sports) && $sports->isNotEmpty())
        <label for="sport" >Sport:</label>
    <select name="sport" id="sport">
                    @foreach($sports as $sport)
                        <option value="{{ $sport->name }}">{{ $sport->name }}</option>
                    @endforeach
                </select>
            @else
                <div>No sports available.</div>
            @endif
        </div>
        

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="match_name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Match Name</label>
                <input id="match_name" name="match_name" type="text" placeholder="Match Name" required
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label for="match_start_date" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Date</label>
                <input id="match_start_date" name="match_start_date" type="date" placeholder="Date" required
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label for="score" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Score</label>
                <input id="score" name="score" type="text" placeholder="Score" required
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
        </div>
<div class="text-center min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
<button class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="submit">Add</button>
</div>
        
    </form>
</x-layout>
