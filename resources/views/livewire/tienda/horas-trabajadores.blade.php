<div>
    @php
    $dias=['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'];
    @endphp
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full table divide-y divide-gray-200">
                            <thead class="md:fixed py-4">
                                <tr class="bg-gray-900 text-center">
                                    <th class="w-1/6 min-w-[140px] text-lg font-semibold text-white py-4 lg:pt-6 px-3 lg:px-4 border-l border-transparent">Día</th>
                                   @foreach ($users as $user)
                                      <th class="w-1/6 min-w-[140px] text-lg font-semibold text-white py-4 lg:pt-6 px-3 lg:px-4 border-l border-transparent">{{$user->name}}</th>
                                       
                                   @endforeach
                                  
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hidden md:table-row">
                                    <td class="text-center">1<br>1<br>1</td>
                                      @foreach ($users as $user)
                                         <td class="text-center">
                                           
                                           {{$user->name}}</td>
                                      @endforeach
                                   
                                       
                                    </td>
                                </tr>
                                @php
                                    $n=0;
                                    
                                @endphp
                                @foreach ($daysOfMonth as $day)
                                    <tr class="@if($day->dayOfWeek==0) bg-red-300 @endif">
                                        <td class="w-1/6 min-w-[140px] text-center">
                                            <div class="items-center">
                                                <section id="{{$n}}">
                                                    {{ $day->toDateString() }}<br>
                                                    {{ $dias[$day->dayOfWeek]}}
                                                </section>
                                            </div>
                                        </td>
                                       
                                         @foreach ($users as $user)
                                            <td class="w-1/6 min-w-[140px] text-center border-2 rounded-lg p-2 ">
                                                @if ($user->horas->where('fecha',$day->toDateString())->count()>0)
                                                    @if ($user->horas->where('fecha',$day->toDateString())->first()->horas)
                                                        <p class="font-bold mb-4 mt-6">{{strtoupper($user->name)}}<br></p>
                                                
                                                        <div class="">
                                                            <h1 class="font-bold mb-2 border-b-2 mx-6 border-gray-900">
                                                                ${{number_format($user->horas->where('fecha',$day->toDateString())->first()->precio*($user->horas->where('fecha',$day->toDateString())->first()->horas-($user->horas->where('fecha',$day->toDateString())->first()->colacion+$user->horas->where('fecha',$day->toDateString())->first()->extra))+($user->horas->where('fecha',$day->toDateString())->first()->precio_extra*($user->horas->where('fecha',$day->toDateString())->first()->extra)))}}
                                                            </h1>
                                                        </div>
                                                        
                                                        <h1 class="font-bold">${{number_format($user->horas->where('fecha',$day->toDateString())->first()->precio*($user->horas->where('fecha',$day->toDateString())->first()->horas-($user->horas->where('fecha',$day->toDateString())->first()->colacion+$user->horas->where('fecha',$day->toDateString())->first()->extra)))}}</h1>
                                                        <h1 class="font-bold">+${{number_format($user->horas->where('fecha',$day->toDateString())->first()->precio_extra*($user->horas->where('fecha',$day->toDateString())->first()->extra))}}</h1>
                                                        <div class="bg-gray-400 rounded-lg py-4 font-bold text-white mb-6">
                                                            {{ $user->horas->where('fecha',$day->toDateString())->first()->horas}} Hrs.<br>
                                                            {{ -$user->horas->where('fecha',$day->toDateString())->first()->colacion}} Hr. Colación<br>
                                                            {{ $user->horas->where('fecha',$day->toDateString())->first()->horas-$user->horas->where('fecha',$day->toDateString())->first()->colacion}} Hrs. Total<br>
                                                            {{ $user->horas->where('fecha',$day->toDateString())->first()->contrato}} Contrato<br>
                                                            {{ $user->horas->where('fecha',$day->toDateString())->first()->extra}} Extra<br>
                                                        </div>

                                                    @endif
                                                    

                                                    
                                                @else
                                              
                                                  <p class="font-bold mt-6">{{strtoupper($user->name)}}<br></p>
                                                
                                                    <form action="{{route('horas.store')}}" method="post">
                                                        @csrf

                                                            @if ($n>0)
                                                                {!! Form::hidden('n',$n) !!}
                                                            @endif
                                                            {!! Form::hidden('fecha',$day->toDateString()) !!}
                                                         

                                                            {!! Form::hidden('user_id',$user->id) !!}
                                                            {!! Form::hidden('tienda_id',$tienda->id) !!}

                                                        <div class="mb-4">
                                                            <label for="hora_ingreso" class="block text-gray-700 text-sm font-bold mb-2">Hora de Ingreso:</label>
                                                            <input type="time" name="hora_ingreso" id="hora_ingreso" class="border rounded w-full py-2 px-3" value="12:00">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label for="hora_salida" class="block text-gray-700 text-sm font-bold mb-2">Hora de Salida:</label>
                                                            <input type="time" name="hora_salida" id="hora_salida" class="border rounded w-full py-2 px-3" value="22:00">
                                                        </div>
                                                        <div class="flex">    
                                                            <div class="mb-4">
                                                                <label for="colacion" class="block text-gray-700 text-sm font-bold mb-2">Colacion:</label>
                                                                <input type="integer" name="colacion" id="colacion" class="border rounded w-full py-2 px-3 text-center" value="1">
                                                            </div>
                                                            <div class="mb-4">
                                                                <label for="contrato" class="block text-gray-700 text-sm font-bold mb-2">Contrato:</label>
                                                                <input type="integer" name="contrato" id="contrato" class="border rounded w-full py-2 px-3 text-center" value="7.5">
                                                            </div>
                                                        </div>
                                                        <div class="flex">    
                                                            <div class="mb-4">
                                                                <label for="precio" class="block text-gray-700 text-sm font-bold mb-2">Precio:</label>
                                                                <input type="integer" name="precio" id="precio" class="border rounded w-full py-2 px-3 text-center" value="3194">
                                                            </div>
                                                            @if ($day->dayOfWeek==0)
                                                                <div class="mb-4">
                                                                    <label for="precio_extra" class="block text-gray-700 text-sm font-bold mb-2">Precio:</label>
                                                                    <input type="integer" name="precio_extra" id="precio_extra" class="border rounded w-full py-2 px-3 text-center" value="4500">
                                                                </div>
                                                            @else
                                                                <div class="mb-4">
                                                                    <label for="precio_extra" class="block text-gray-700 text-sm font-bold mb-2">Precio:</label>
                                                                    <input type="integer" name="precio_extra" id="precio_extra" class="border rounded w-full py-2 px-3 text-center" value="3900">
                                                                </div>
                                                            @endif
                                                           
                                                        </div>


                                                      

                                                        <div class="mb-6">
                                                            <button type="submit" class="bg-green-700 text-white py-2 px-4 rounded">Agregar</button>
                                                        </div>
                                                    </form>
                                                @endif
                                            </td>
                                         @endforeach
                                        
                                       
                                    </tr>
                                    @php
                                        $n+=1;
                                    @endphp
                                @endforeach
                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
