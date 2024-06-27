<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia - Principal</title>
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
</head>

<body>

    <header>
        <h1 class="titulo">DROGUERIA <span>Proyecto</span></h1>
    </header>

    <div class="nav-bg">

        <nav class="navegacion-principal contenedor">

            <a href="">Inicio</a>
            <a href="">Productos</a>
            <a href="">Clientes</a>
            <a href="">Categorias</a>
        </nav>

 <section class="">
            <center><h2 class="text-form">Editor de Producto</h2>
            <form action="{{route('actualiza_prod', $Producto->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="text" name="nombre_prod" class="caja-adic" value="{{$Producto->nombre_pro}}" placeholder="Digite el Nombre Del Producto">
                <br>
                <br>
                <input type="text" name="id_prod" class="caja-adic" value="{{$Producto->tipo_pro}}" placeholder="Digite la Categoria Del Producto">
                <br>
                <br>
                <input type="text" name="precio" class="caja-adic" value="{{$Producto->precio_pro}}" placeholder="Digite el Precio Del Producto">
                <br>
                <br>
                <input type="text" name="cantidad" class="caja-adic" value="{{$Producto->cantidad_pro}}" placeholder="Digite la Cantidad Del Producto">
                <br>
                <input type="submit" name="boton" value="Enviar" class="boton-adic">
                <input type="hidden" name="id_producto" value="{{$Producto->id}}">
            </form>
            </center>
        </section>