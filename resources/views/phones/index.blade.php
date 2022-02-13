<x-app-layout>  
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('Lista mobitela' ) }}    
        </h2>  
    </x-slot>
   
    <div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('/assets/bg.svg');">
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <a href="\add_phone" class="group block max-w-xs mx-auto rounded-lg p-6 bg-whitering-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
  <div class="flex items-center space-x-3">
    <svg class="h-6 w-6 stroke-sky-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24"><!-- ... --></svg>
    <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">Novi mobitel</h3>
  </div>
  <p class="text-slate-500 group-hover:text-white text-sm">Dodaj novi mobitel. </p>
</a>
<br>
<br>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <h1 class="font-xl mb-4 text-center">Ovdje će biti izlistani mobiteli</h1>
                <hr />
                @foreach ($phones as $phone)
                <div class="flex space-x-4">
                    <div class="flex-1"><p class="p-2"> {{ $phone->brand }} - {{ $phone->model }}     -      OS:
                         @foreach($osystems as $osystem)
                        @if($phone->osystem == $osystem->id) 
                       {{$osystem->name }} - {{$osystem->version}}
                       @endif
                        @endforeach 
                    </div>
                     <div lcass="flex-1">
                        <form method="POST" action="{{ route('delete_phone') }}">
                            @csrf 
                            <input type="hidden" name="id" value="{{$phone->id}}">
                            <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-red-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase ml-4">
                                 {{ __('Obrisi') }}
                                </button>
                            </div>
                        </form>
                    </div>
                        <div class="flex-1">
                            <form method="POST" action="{{ route('edit_phone') }}">
                                @csrf 
                                <input type="hidden" name="id" value="{{$phone->id}}">
                                <div class="p-2">
                                <button class="ml-4 inline-flex items-center px-4 py-2 bg-green-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase">
                                      {{__('Uredi') }}
                                    </button>                          
                                </div>
                            </form>
                        </div>
                </div>
           @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>  
