@extends('layouts.menu')

@section('contenido')
        
<div class="row">
    <h1>{{$producto->nombre}}</h1>
    <div style="height:450px; width:430px" class="card">
                    <div class="card-image">
                       
                        <img src="{{ asset('img/'.$producto->imagen) }}" alt="">
                        <span class="card-title">{{ $producto->nombre}}</span>
                    </div>
                    
    </div>
</div>
<div class="row">
    <div class="col s8">
        <p>Marca: {{ $producto->marca->nombre}}</p>
    </div>
    <div class="col s4">
        <p>Precio: US {{ $producto->precio}}</p>
        <p>Categoria: {{ $producto->categoria_id}}</p>
    </div>
</div>
<div class="col s4">
    <div class="row">
        <h3>Añadir al carrito</h3>
    </div>

    <form action="{{ route('cart.store')}}" method="POST">
        @csrf
        <input type="hidden" 
               name="prod_id" 
               value="{{ $producto->id}}">

        <input type="hidden" 
               name="prod_nom" 
               value="{{ $producto->nombre}}">
        
        <input type="hidden" 
               name="prod_pre" 
               value="{{ $producto->precio}}">

        <div class="row">
            <div class="col s4 input-field">
                <select name="cantidad" id="cantidad">
                    <option value="" selected> SELECCIONAR </option>
                    <option value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="3"> 3 </option>
                </select>
                <label for="cantidad">Cantidad</label>
            </div>
        </div>
        <div class="row">
        <div class="input-field col s8">
        <button class="btn amber accent-3" type="submit" name="action">Añadir</button>
        </div>
       </div>
    </form>
</div>

@endsection