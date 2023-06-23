@extends('layouts.app')

@section('name')

<div class="m-auto w-1/3 bg-slate-200 rounded-md p-8 mt-8" >
    <div class="p-3">
        <div class="flex items-center justify-between mb-2">
            
                <img class="w-10 h-10 rounded-full" src="https://ui-avatars.com/api/?name=hamza%20msabri" alt="Jese Leos">
            
            <div>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Follow</button>
            </div>
        </div>
        <p class="text-base font-semibold leading-none text-gray-900 dark:text-white">
            {{$user->name}}
        </p>
        <p class="mb-3 text-sm font-normal">
            {{$user->username}}
        </p>
        
        <ul class="flex text-sm justify-evenly">
            <li class="mr-2">
                <a href="#" class="hover:underline">
                    <span class="font-semibold text-gray-900 dark:text-white">799</span>
                    <span>Folzzlowing</span>
                </a>
            </li>
            <li>
                <a href="#" class="hover:underline">
                    <span class="font-semibold text-gray-900 dark:text-white">3,758</span>
                    <span>Followers</span>
                </a>
            </li>
        </ul>
        zz
    </div>
    zzz
    <div data-popper-arrow>
        aaa
    </div>
</div>

<div>
        {{-- <h3 class="m-auto border-current rounded-xl font-extralight text-lg text-center p-7 w-1/4 bg-violet-400	mb-10">Créer votre publication</h3>
        <div class="card bg-base-100 shadow-xl m-auto h-72 w-1/4 rounded-lg">
            <div class="card-body">


            </div>
          </div> --}}

</div>
@endsection