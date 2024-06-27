<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crear-Drogueria</title>
        <link rel="shortcut icon" href="{{asset('img/farmacia (1).png')}}">
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
    
                <a href="{{route('principal')}}">Inicio</a>
                <a href="">Productos</a>
                <a href="">Clientes</a>
                <a href="{{route('principrov')}}">Proveedores</a>
                <a href="{{route('princitipo')}}">Categorias</a>
    
            </nav>
        </div>
    <main>
        <center>
        <section class="formulario_creacion_prov">
            <center><h2 class="text-form">Creacion de Proveedor</h2>
            <form action="{{route('adicion_prov')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="text" name="nombre_prov" class="caja-adic" placeholder="Digite el Nombre Del Proveedor">
                <br>
                <br>
                <input type="text" name="direccion_prov" class="caja-adic" placeholder="Digite la Direccion Del Proveedor">
                <br>
                <br>
                <input type="text" name="telefono_prov" class="caja-adic" placeholder="Digite el Telefono Del Proveedor">
                <br>
                <br>
                <input type="text" name="pagina_web" class="caja-adic" placeholder="Digite la Pagina web Del Proveedor">
                <br>
                <input type="submit" name="boton" value="Enviar" class="boton-adic">
            </form>
            </center>
        </section>
        </center>
    </main>

    <center>
    <a type="button" class="boton_volvertipo" href="{{route('principrov')}}"><- Volver</a>
    </center>

</html>