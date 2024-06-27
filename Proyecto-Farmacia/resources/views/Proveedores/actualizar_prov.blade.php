<!DOCTYPE html>
<html lang="en">
<<head>
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
    </div>
        <section class="formulario-adic">
            <center><h2 class="text-form">Editor de Proveedor</h2>
            <form action="{{route('actualiza_prov', $proveedor->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="text" name="nombre_prov" class="caja-adic" value="{{$proveedor->nombre_prov}}" placeholder="Digite el Numero Del Cliente">
                <br>
                <br>
                <input type="text" name="direccion_prov" class="caja-adic" value="{{$proveedor->direccion_prov}}" placeholder="Digite la Direccion Del Cliente">
                <br>
                <br>
                <input type="text" name="telefono_prov" class="caja-adic" value="{{$proveedor->nro_telefono_prov}}" placeholder="Digite el Telefono Del Cliente">
                <br>
                <br>
                <input type="text" name="pag_web" class="caja-adic" value="{{$proveedor->pag_web}}" placeholder="Digite el Correo Del Cliente">
                <br>
                <input type="submit" name="boton" value="Enviar" class="boton-adic">
                <input type="hidden" name="id_proveedor" value="{{$proveedor->id}}">
            </form>
            </center>
        </section>
    </body>
</html>