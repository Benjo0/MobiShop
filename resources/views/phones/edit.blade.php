<x-app-layout>  
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('Izmjena-Mobitela' ) }}
        <h2>
    </x-slot>
   

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
                @foreach($phones as $phone)
                <form method="POST" action="{{ route('update_phone') }}">
                    @csrf   
                    <input type="hidden" name="id" value="{{$phone->id}}" />
                    <div>
                        <x-jet-label for="brand" value="{{__('Brend') }}" />
                        <x-jet-input id="brand" class="block mt-1 w-full" type="text" name="brand" value="{{$phone->brand}}" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="model" value="{{__('Model') }}" />
                        <x-jet-input id="model" class="block mt-1 w-full" type="text" name="model" value="{{$phone->model}}" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="price" value="{{__('Cijena') }}" />
                        <x-jet-input id="price" class="block mt-1 w-full" type="number" name="price" value="{{$phone->price}}" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="screen" value="{{__('Ekran') }}" />
                        <x-jet-input id="screen" class="block mt-1 w-full" type="text" name="screen" value="{{$phone->screen}}" required autofocus />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="memory" value="{{__('Memorija') }}" />
                        <x-jet-input id="memory" class="block mt-1 w-full" type="text" name="memory" value="{{$phone->memory}}" required autofocus />
                    </div>
                    <div class="mt-4">
                    <x-jet-label for="memory" value="{{__('Operativni sistem') }}" />
                    <select id="osystem" name="osystem" class="form-select block w-full mt-1 border-gray-300 focus:borde-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-500 rounded-md shadow-sm">
                        <option>Odaberi</option>
                        @foreach($osystems as $osystem)
                        <option value="{{$osystem->id}}"
                        @if($phone->osystem == $osystem->id) selected
                        @endif>{{$osystem->name }} - {{$osystem->version}}</option>
                        @endforeach
                        </select>
                    </div>
                   
                    <div class="mt-4">
                        <x-jet-label for="condition" value="{{__('Stanje') }}" />
                        <select id="condition" name="condition" class="form-select block w-full mt-1 border-gray-300 focus:borde-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-500 rounded-md shadow-sm">
                        <option value="{{$phone->condition}}">{{$phone->condition}}</option>
                        <option value="Novo">Novo</option>
                        <option value="Polovno"> Polovno</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="osystem" value="{{__('Opis') }}" />
                        <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" value="{{$phone->description}}" required autofocus />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4">
                            {{ __('Spremi') }}
                        </x-jet-button>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
</x-app-layout>