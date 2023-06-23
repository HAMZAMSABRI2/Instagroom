<x-app-layout>


    <div class="py-12 ">
        {{-- <h3 class="m-auto border-current rounded-xl font-extralight text-lg text-center p-7 w-1/4 bg-violet-400	mb-10">Créer votre publication</h3>
        <div class="card bg-base-100 shadow-xl m-auto h-72 w-1/4 rounded-lg">
            <div class="card-body">


            </div>
          </div> --}}

        </div>
        @foreach ($post as $item)
            
        <div class="w-full max-w-sm m-auto mt-5 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="m-auto flex justify-around gap-8 items-center  border">
            
<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">- <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
<!-- Dropdown menu -->
<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
      <li>
        @if (Auth::id()==$item->user_id)
            <a href="route" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">envoie moi un message</a>
            <a href="{{ route('post.destroy', $item->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">delete</a> 
            
            @else    
            <a href="route" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">envoie moi un message</a> 
            
            @endif
      </li>

    </ul>
</div>

            <img src="{{$item->user->avatar}}" alt="" class="rounded-full">
              <h1 class="text-center">{{$item->user->name}}</h1>
          </div>
        <img class="p-8 rounded-t-lg" src="{{ asset($item->cover) }}" alt="product image" />
  </a>
  <div class="px-5 pb-5">
      <a href="#">
          <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$item->description}}</h5>
      </a>


  </div>

  <div class="p-2">
    {{-- <textarea name="" id="" cols="30" rows="10"></textarea> --}}
  </div>
</div>

@endforeach

    
</x-app-layout>

