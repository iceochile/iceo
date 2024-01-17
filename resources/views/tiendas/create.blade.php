<x-app-layout>
    <div class="max-w-7xl mx-auto relative overflow-hidden mb-8">
        <div class="container py-2 md:py-8">
            
            <div class="card">
                <div class="card-body">
                    <h1 class="text-2xl font-bold">Nuevo Negocio</h1>
                    <hr class="mt-2 mb-6">

                    {!! Form::open(['route'=>'tiendas.store','files'=>true , 'autocomplete'=>'off']) !!}
                        @csrf

                        {!! Form::hidden('user_id',auth()->user()->id) !!}

                             
                        <div class="mb-4">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null , ['class' => 'form-input block w-full mt-1'.($errors->has('name')?' border-red-600':'')]) !!}

                            @error('name')
                                <strong class="text-xs text-red-600">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mb-4">
                            {!! Form::label('ubicacion', 'Ubicación:') !!}
                            {!! Form::text('ubicacion', null , ['class' => 'form-input block w-full mt-1'.($errors->has('ubicacion')?' border-red-600':'')]) !!}
                        </div>

                        <div class="mb-4">
                            {!! Form::label('rut', 'Rut Negocio:') !!}
                            {!! Form::text('rut', null , ['class' => 'form-input block w-full mt-1'.($errors->has('rut')?' border-red-600':'')]) !!}

                            @error('rut')
                                <strong class="text-xs text-red-600">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-4">
                            {!! Form::label('giro', 'Giro:') !!}
                            {!! Form::text('giro', null , ['class' => 'form-input block w-full mt-1'.($errors->has('giro')?' border-red-600':'')]) !!}

                            @error('giro')
                                <strong class="text-xs text-red-600">{{$message}}</strong>
                            @enderror
                        </div>

                        <div class="mb-4">
                            {!! Form::label('dirección_comercial', 'Dirección comercial:') !!}
                            {!! Form::text('direccion_comercial', null , ['class' => 'form-input block w-full mt-1'.($errors->has('direccion_comercial')?' border-red-600':'')]) !!}
                        </div>
                        

                        <h1 class="text-2xl font-bold mt-8 mb-2">Logo</h1>
                        <div class="grid grid-cols-2 gap-4">
                            <figure>
                                @isset($serie->image)
                                    <img id="picture" class="w-full h-64 object-cover object-center"src="{{Storage::url($serie->image->url)}}" alt="">
                                    @else
                                    <img id="picture" class="w-full h-64 object-cover object-center"src="{{asset('home/icono2.ico')}}" alt="">
                                    
                                
                                @endisset
                                </figure>
                            <div>
                                <p class="mb-2">Agrega un logo de tu empresa, si no lo tienes a mano puedes agregarlo luego.</p>
                                {!! Form::file('file', ['class'=>'form-input w-full'.($errors->has('file')?' border-red-600':''), 'id'=>'file','accept'=>'image/*']) !!}
                                @error('file')
                                    <strong class="text-xs text-red-600">{{$message}}</strong>
                                @enderror
                            </div>
                        </div>

                    

                        <div class="flex justify-end">
                            {!! Form::submit('Crear negocio', ['class'=>'font-bold py-2 px-4 rounded bg-gray-500 text-white cursor-pointer']) !!}
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>




