

<x-app-layout>  
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('Operativni sistemi' ) }}
        <h2>
    </x-slot>
    <div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('/assets/bg.svg');">
    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <a href="\add_osystem" class="group block max-w-xs mx-auto rounded-lg p-6 bg-whitering-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
  <div class="flex items-center space-x-3">
    <svg class="h-6 w-6 stroke-sky-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24"><!-- ... --></svg>
    <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">Novi Operativni sistem</h3>
  </div>
  <p class="text-slate-500 group-hover:text-white text-sm">Dodaj novi operativni sistem.</p>
</a>
<br>
<br>
        <h1 class="font-xl mb-4 text-center">Ovdje će biti izlistani operativni sistemi</h1> 
                <hr />
               
            <div class="bg-white overflow-hidden shadow-x1 sm:rounder-lg">
                <div class="p-2">
                                    <div class="flex flex-row">
                                            <div class="basis-20">ID</div>
                                            <div class="basis-20">IME</div>
                                            <div class="basis-20">VERZIJA</div>
                                    </div>
                    @foreach ($osystems as $osystem)
                                    <div class="flex flex-row">
                                        <div class="basis-20">{{$osystem->id}}</div>
                                        <div class="basis-20">{{ $osystem->name }}</div>
                                        <div class="basis-20">{{ $osystem->version }}</div>
                                    </div>
 <!-- <p class="p-2">{{$osystem->id}}. {{ $osystem->name }} - {{ $osystem->version }}</p>-->
                    @endforeach
                </div>
                
            </div>
        </div> 
    </div>
</div>   
</x-app-layout>
