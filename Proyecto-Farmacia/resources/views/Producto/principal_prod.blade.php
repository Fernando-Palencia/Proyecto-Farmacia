<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos-Drogueria</title>
    <link rel="shortcut icon" href="{{asset('img/farmacia (1).png')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>

    <header>
        <h1 class="titulo">DROGUERIA <span>Proyecto</span></h1>
    </header>

    
    <div class="nav-bg">

        <nav class="navegacion-principal contenedor">

            <a href="{{route('principal')}}">Inicio</a>
            <a href="{{route('principrod')}}">Productos</a>
            <a href="">Clientes</a>
            <a href="{{route('principrov')}}">Proveedores</a>
            <a href="{{route('princitipo')}}">Categorias</a>

        </nav>
    </div>
    <h1 class="titulo">PRODUCTOS</h1>
    <center>
    <a type="button" class="boton_crearprod" href="{{route('creacion_prod')}}">CREAR PRODUCTO</a>
    </center>

    <table class="tabla-prod">
        <thead>
        <tr>
            <th>ID PRODUCTO</th>
            <th>NOMBRE PRODUCTO</th>
            <th>ID CATEGORIA</th>
            <th>NOMBRE CATEGORIA</th>
            <th>PRECIO</th>
            <th>CANTIDAD</th>
            <th class="link-cate">ACTUALIZAR</th>
            <th class="link-cate">ELIMINAR</th>
        <center>
        @forelse($productos as $producto)
            <tr>
            <th>{{$producto->id}}</th>
            <th>{{$producto->nombre_pro}}</th>
            <th>{{$producto->tipo_pro}}</th>
            <th>{{$producto->tipo->descrip_tipo}}</th>
            <th>{{$producto->precio_pro}}</th>
            <th>{{$producto->cantidad_pro}}</th>
            <th><a href="{{route('modifi_prod', $producto->id)}}"><img class="edita" src="{{asset('img/editar.png')}}"/></a></th>
            <th><a href="{{route('elimina_prod', $producto->id)}}"><img class="elimina" src="{{asset('img/eliminar.png')}}"/></a></th>
        </tr>
        @empty
            <li>No se encontraron datos</li>
        @endforelse

        </center>
        </thead>
       
        
    </body>
</html>