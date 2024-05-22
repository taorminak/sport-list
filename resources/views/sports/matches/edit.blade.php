<x-layout>
    <x-slot name="heading" >Edit an Event</x-slot>

    <div class="flex items-center justify-between ml-10">
         <form method="POST" action="/sports/matches/{{ $match->id }}" class="w-full max-w-lg">
        @csrf 
        @method('PATCH')

        <div class="flex flex-wrap mb-6">
        <select id="sport" name="sport" required>
        @foreach($sports as $sport)
            <option value="{{ $sport->id }}">{{ $sport->name }}</option>
        @endforeach
    </select>
        </div>
        

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label for="match_name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Match Name</label>
                <input 
                id="match_name" 
                name="match_name" 
                type="text" 
                placeholder="Match Name" 
                value = "{{ $match->match_name}}"
                required
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label for="match_start_date" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Date</label>
                <input 
                id="match_start_date" 
                name="match_start_date" 
                type="date" 
                placeholder="Date" 
                value = "{{ $match->match_start_date}}"
                required
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label for="score" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Score</label>
                <input 
                id="score" 
                name="score" 
                type="text" 
                placeholder="Score" 
                value = "{{ $match->score}}"
                required
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
        </div>

        <div class="text-center min-h-[140px] w-full place-items-center overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
            <div class="text-center w-full  overflow-x-scroll rounded-lg lg:overflow-visible">
            <button form="delete-form"  class="middle none center mr-4 rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
    data-ripple-light="true" type="submit">Delete</button>
            </div>

            <div class="text-center  overflow-x-scroll rounded-lg p-6 lg:overflow-visible">
            <button  class="middle none center rounded-lg bg-orange-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-orange-500/20 transition-all hover:shadow-lg hover:shadow-orange-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
    data-ripple-light="true" type="submit">Update</button>
        <a class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
    data-ripple-light="true" href="/sports/matches/{{ $match->id }}">Cancel</a>
            </div>
        </div>

        
    </form>

    <form method="POST" action="/sports/matches/{{ $match->id }}" id="delete-form" class="hidden">
    @csrf 
        @method('DELETE')
    </form>
    </div>
  
   
</x-layout>
