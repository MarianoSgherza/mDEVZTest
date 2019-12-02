@extends('header')
@section('content')
    <div class="contenedor-historial">

        <div class="cabecera">
            <h2>Término</h2>
            <p>Fecha</p>
        </div>
        <div class="listado">

            @foreach ($historial as $item)
            
                <div class="item">
                
                    <div class="termino">
                        {{
                            $item['término']
                        }}
                    </div>
                    <div class="fecha">
                        {{$item['created_at']}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
@endsection