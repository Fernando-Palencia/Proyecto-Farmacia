<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes-Drogueria</title>
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
            <a href="{{route('princicli')}}">Clientes</a>
            <a href="{{route('principrov')}}">Proveedores</a>
            <a href="{{route('princitipo')}}">Categorias</a>

        </nav>
    </div>
    <h1 class="titulo">CLIENTES</h1>
    <center>
    <a type="button" class="boton_crearprod" href="{{route('creacion_prod')}}">CREAR CLIENTE</a>
    </center>
<main>
    <center>    
    <table class="tabla-cli">
        <thead>
        <tr>
            <th>ID CLIENTE</th>
            <th>NOMBRE CLIENTE</th>
            <th>DIRECCION CLIENTE</th>
            <th>TELEFONO CLIENTE</th>
            <th>CORREO CLIENTE</th>
            <th>IMAGEN POST</th>
            <th class="link-cate">ACTUALIZAR</th>
            <th class="link-cate">ELIMINAR</th>
        </tr>
        </thead>
        </center>
        @forelse($clientes as $cliente)
       <!-- <tbody class="tabla-clie-hover">-->
            <tr>
            <td>{{$cliente->id}}</td>
            <td>{{$cliente->nombre_cli}}</td>
            <td>{{$cliente->direccion_cli}}</td>
            <td>{{$cliente->nro_telefono_cli}}</td>
            <td>{{$cliente->correo_cli}}</td>
            <td>{{$cliente->imagen_cli}}</td>
            <td><a href="{{route('edit_clie', $cliente->id)}}"><img class="edita-tipo" src="{{asset('img/editar.png')}}"/></a></th>
            <td><a href="{{route('elim_clie', $cliente->id)}}"><img class="elimina-tipo" src="{{asset('img/eliminar.png')}}"/></a></th>
        </tr>
        </tbody>
        @empty
            <li class="lista-cli">No se encontraron datos</li>
        @endforelse
        </table>
    </center>
    </main>