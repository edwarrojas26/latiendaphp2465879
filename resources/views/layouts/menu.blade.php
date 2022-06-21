<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('materialize/css/materialize.css') }}" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

    <nav class="teal accent-4">
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">TIENDA</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('productos.index')}}">Productos</a></li>
            <li><a href="{{route('cart.index')}}">Carrito</a></li>
        </ul>
        </div>
    </nav>

    <div class="container">
        @yield('contenido')
      </div>

<script src="{{ asset('materialize/js/materialize.js') }}">
</script>
<script>

     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, []);
  });
  
</script>
</body>
</html>