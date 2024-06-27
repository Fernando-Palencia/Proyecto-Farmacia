<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proveedores-Drogueria</title>
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

    <h1 class="titulo">PROVEEDORES</h1>

    <center>
    <a type="button" class="boton_crearprov" href="{{route('crea_prov')}}">CREAR PROVEEDOR</a>
    </center>

    <table class="tabla-prod">
        <thead>
        <tr>
            <th>ID PROVEEDOR</th>
            <th>NOMBRE PROVEEDOR</th>
            <th>DIRECCION PROVEEDOR</th>
            <th>TELEFONO PROVEEDOR</th>
            <th>PAGINA</th>
            <th class="link-cate">ACTUALIZAR</th>
            <th class="link-cate">ELIMINAR</th>
        </center>
        @forelse($proveedores as $proveedor)
            <tr>
            <th>{{$proveedor->id}}</th>
            <th>{{$proveedor->nombre_prov}}</th>
            <th>{{$proveedor->direccion_prov}}</th>
            <th>{{$proveedor->nro_telefono_prov}}</th>
            <th>{{$proveedor->pag_web}}</th>
            <th><a href="{{route('modifi_prov', $proveedor->id)}}"><img class="edita" src="{{asset('img/editar.png')}}"/></a></th>
            <th><a href="{{route('elimina_prov', $proveedor->id)}}"><img class="elimina" src="{{asset('img/eliminar.png')}}"/></a></th>
        </tr>
        </tr>
        @empty
            <li>No se encontraron datos</li>
        @endforelse
        </thead>
</body>
</html>