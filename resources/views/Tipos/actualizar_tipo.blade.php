<!DOCTYPE html>
<htm l lang="en">
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
   
        <section>
            <center>
                <h2 class="">FORMULARIO PRUEBA</h2>
                <form action="{{route('actualiza_tipo', $tipo->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <input type="text" name="descrip_tipo" class="" value="{{$tipo->descrip_tipo}}" placeholder="DIGITAR">
                    <br>
                    <input type="submit" name="boton" value="Enviar" class="">
                    <input type="hidden" name="id_tipos" value="{{$tipo->id_tipo}}">
                </form>
                </center>
        </section>
    
    </body>
</html>
