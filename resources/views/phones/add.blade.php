<x-app-layout>  
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('Dodaj-Mobitel' ) }}
        <h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                <form method="POST" action="{{ route('store_phone') }}">
                    @csrf   
                    <div>
                        <x-jet-label for="name" value="{{__('Brend') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="brand" :value="old('brand')" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="year" value="{{__('Model') }}" />
                        <x-jet-input id="year" class="block mt-1 w-full" type="text" name="model" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="engine" value="{{__('Cijena') }}" />
                        <x-jet-input id="engine" class="block mt-1 w-full" type="number" name="price" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="code" value="{{__('Ekran') }}" />
                        <x-jet-input id="code" class="block mt-1 w-full" type="text" name="screen" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="air_condition" value="{{__('Memorija') }}" />
                        <x-jet-input id="air_condition" class="block mt-1 w-full" type="number" name="memory" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="brand" value="{{__('Operativni sistem') }}" />
                        <select id="osystem" name="osystem" class="form-select block w-full mt-1 border-gray-300 focus:borde-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-500 rounded-md shadow-sm">
                        <option>Odaberi</option>
                        @foreach($osystems as $osystem)
                        <option value="{{$osystem->id}}">
                       {{$osystem->name }} - {{$osystem->version}}</option>
                        @endforeach
                        </select>
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="brand" value="{{__('Novo/Polovno') }}" />
                        <select id="gender"  class="form-select block w-full mt-1 border-gray-300 focus:borde-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-500 rounded-md shadow-sm" name="condition">

                             <option value="Novo">
                                     Novo
                            </option>
                                 <option value="Polovno">
                                        Polovno
                                 </option>
                                </select>
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="brand" value="{{__('Opis') }}" />
                        <x-jet-input id="brand" class="block mt-1 w-full" type="text" name="description" required autofocus />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4 ring-2 ring-blue-500 bg-sky-600 hover:bg-sky-900">
                            {{ __('Spremi') }}
                        </x-jebutton>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>  