<x-app-layout>  
    <x-slot name="header">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{__('Lista' ) }}
        <h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-x1 sm:rounder-lg" style="background-image:url('/assets/bg.svg');">
                <div class="grid grid-cols-2 gap-4 p-3 justify-items-center">
                   <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                    <tr>
                                        <th colspan="4">Najprodavaniji mobiteli </th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ..."></th>
                                    <th class="border border-slate-300 ...">Brend</th>
                                    <th class="border border-slate-300 ...">Model</th>
                                    <th class="border border-slate-300 ...">Količina</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($most_common_phones as $most_common_phone)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{{$loop->iteration}}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phone->brand}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phone->model}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phone->brojac}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                        
                     
                   </div>
                   <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                    <tr>
                                        <th colspan="5" >Prodani mobiteli sortirani po cijeni </th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ..."></th>
                                    <th class="border border-slate-300 ...">Brend</th>
                                    <th class="border border-slate-300 ...">Model</th>
                                    <th class="border border-slate-300 ...">Cijena</th>
                                    <th class="border border-slate-300 ...">Količina</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($most_common_phone_prices as $most_common_phone_price)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{{$loop->iteration}}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phone_price->brand}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phone_price->model}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phone_price->price}} KM</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phone_price->brojac}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                   </div>
                   <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                    <tr>
                                        <th colspan="4" >Operativni sistemi najprodavanijih mobitela </th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ..."></th>
                                    <th class="border border-slate-300 ...">Ime</th>
                                    <th class="border border-slate-300 ...">Verzija</th>
                                    <th class="border border-slate-300 ...">Količina</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($most_common_phones_osystems as $most_common_phones_osystem)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{{$loop->iteration}}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phones_osystem->name}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phones_osystem->version}}</td>
                                    <td class="border border-slate-300 ...">{{$most_common_phones_osystem->brojac}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                   </div>
                   <div>
                       <h1>Broj prodanih mobitela u 2022. godini</h1>
                       <hr/>
                       <p>Količina: {{$number_of_sellings}}</p>
                   </div>
                   <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                <tr>
                                        <th colspan="5" >Mobiteli koji su prodani od 1.02-8.02.2022 čija je cijena 2000KM-3000KM </th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ..."></th>
                                    <th class="border border-slate-300 ...">Brend</th>
                                    <th class="border border-slate-300 ...">Model</th>
                                    <th class="border border-slate-300 ...">Cijena</th>
                                    <th class="border border-slate-300 ...">Količina</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($phones_sold_prices as $phones_sold_price)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{{$loop->iteration}}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_sold_price->phone_brand}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_sold_price->phone_model}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_sold_price->phone_price}}KM</td>
                                    <td class="border border-slate-300 ...">{{$phones_sold_price->brojac}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                    
                   </div>
                   <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                <tr>
                                        <th colspan="5" >Ispis kupaca iz Bihaca koji su kupili mobitel od 1.02 -8.02.2022 </th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ..."></th>
                                    <th class="border border-slate-300 ...">Ime</th>
                                    <th class="border border-slate-300 ...">Prezime</th>
                                    <th class="border border-slate-300 ...">Brend</th>
                                    <th class="border border-slate-300 ...">Model</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($customer_cities as $customer_city)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{{$loop->iteration}}}</td>
                                    <td class="border border-slate-300 ...">{{$customer_city->name}}</td>
                                    <td class="border border-slate-300 ...">{{$customer_city->lastname}}</td>
                                    <td class="border border-slate-300 ...">{{$customer_city->phone_brand}}</td>
                                    <td class="border border-slate-300 ...">{{$customer_city->phone_model}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                   </div>
                    <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                <tr>
                                        <th colspan="4" >Ispis mobitela koji su kupljeni čija je memorija 128 GB </th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ..."></th>
                                    <th class="border border-slate-300 ...">Brend</th>
                                    <th class="border border-slate-300 ...">Model</th>
                                    <th class="border border-slate-300 ...">Količina</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($phones_sold_memory as $phone_memory)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{{$loop->iteration}}}</td>
                                    <td class="border border-slate-300 ...">{{$phone_memory->phone_brand}} </td>
                                    <td class="border border-slate-300 ...">{{$phone_memory->phone_model}}</td>
                                    <td class="border border-slate-300 ...">{{$phone_memory->brojac}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                       
                   </div>
                   <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                <tr>
                                        <th colspan="3" >Ispis Samsung mobitela koji su kupljeni polovni </th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ..."></th>
                                    <th class="border border-slate-300 ...">Brend</th>
                                    <th class="border border-slate-300 ...">Količina</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($phones_brands as $phones_brand)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{{$loop->iteration}}}</td>
                                    <td class="border border-slate-300 ...">{{$phone_memory->phone_model}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_brand->brojac}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                      
                   </div>
                   <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                <tr>
                                        <th colspan="4" >Kupci iz Cazina, gdje je mobitel Apple u periodu 04.02-09.02.2022</th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ..."></th>
                                    <th class="border border-slate-300 ...">Ime</th>
                                    <th class="border border-slate-300 ...">Prezime</th>
                                    <th class="border border-slate-300 ...">Model</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($phones_brand_date as $phones_brand)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{{$loop->iteration}}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_brand->name}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_brand->lastname}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_brand->phone_model}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                   </div>
                   <div>
                       <table class="border-collapse border border-slate-400 ...">
                                <thead>
                                <tr>
                                        <th colspan="5" >Ispis kupaca iz Bihaca čiji je mobitel Android, Displej 6.2" i cijena ispod 1500KM </th>
                                    </tr>
                                    <tr>
                                    <th class="border border-slate-300 ...">Ime</th>
                                    <th class="border border-slate-300 ...">Prezime</th>
                                    <th class="border border-slate-300 ...">Brend</th>
                                    <th class="border border-slate-300 ...">Model</th>
                                    <th class="border border-slate-300 ...">Verzija OS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($phones_screens as $phones_screen)
                                    <tr>
                                    <td class="border border-slate-300 ...">{{$phones_screen->name}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_screen->lastname}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_screen->phone_brand}}</td>
                                    <td class="border border-slate-300 ...">{{$phones_screen->phone_model}} </td>
                                    <td class="border border-slate-300 ...">{{$phones_screen->osystem_version}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                   </div>
                   
                   </div>
                </div>
            </div>
        </div> 
    </div>

</x-app-layout>