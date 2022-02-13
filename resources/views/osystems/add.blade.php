<x-app-layout>  
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('Dodaj-Operativni sistem' ) }}
        <h2>
    </x-slot>
   
<div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('/assets/bg.svg');">
<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <form method="POST" action="{{ route('store_osystem') }}">
                    @csrf   
                    <div >
                        <x-jet-label for="name" value="{{__('Naziv') }}" />
                        <x-jet-input  id="name" class="block mt-1 w-full border-solid border-2 border-blue-400" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="version" value="{{__('Verzija') }}" />
                        <x-jet-input id="version" class="block mt-1 w-full border-solid border-2 border-blue-400" type="text" name="version" required autofocus />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4">
                            {{ __('Spremi') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</x-app-layout>  