@extends('layouts.menu')

@section('contenido')

        @if(session('mensajito'))
        <div class="row">
            <strong>
            {{session('mensajito')}}

                <a href="{{ route( 'cart.index' ) }}">
                    Ir a carrito</a>
            </strong>
        </div>
        @endif

        <div class="row">
            <h1 class="teal-text text-darken-1"> Catalogo de productos </hi>
        </div>

    @foreach($productos as $producto)
        <div style="display: inline-block" class="row">
            <div class="col s8">
                <div style="height:550px; width:400px" class="card">
                    <div class="card-image">
                        @if ($producto->imagen === null)
                            <img src="{{ asset('img/Nodisponiblemiciela.png')}}" alt="">
                        
                        @else
                            <img src="{{ asset('img/'.$producto->imagen) }}" alt="">
                        
                        @endif
                        
                        
                        <span class="card-title">{{ $producto->nombre}}</span>
                    </div>
                    <div class="card-content">
                        <p>{{ $producto->desc }}</p>
                    </div>
                    <div class="card-action">
                            <a href="{{route ('productos.show', $producto->id)}}">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection