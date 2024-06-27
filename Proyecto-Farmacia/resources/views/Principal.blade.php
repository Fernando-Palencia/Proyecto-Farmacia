<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal-Drogueria</title>
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

    <section class="hero">
        <div class="contenido-hero">
            <h2>Inventario Drogueria <span>Proyecto</span></h2>

            <p> <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
   <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path>
</svg>
                Bogota, Colombia</p>

            <a class="boton" href="">Contactar</a>

        </div>
    </section>

    <main class="contenedor sombra">
        <h2>Mis Servicios</h2>

        <div class="servicios">

            <section class="servicio">
                <h3>Productos</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pill" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M4.5 12.5l8 -8a4.94 4.94 0 0 1 7 7l-8 8a4.94 4.94 0 0 1 -7 -7"></path>
   <path d="M8.5 8.5l7 7"></path>
</svg>
                </div>
                <p>Tenemos un listado con nuestros productos con sus respectivas marcas y precio</p>
            </section>

            <section class="servicio">
                <h3>Clientes</h3>
                <div class="iconos">
                <svg
                 width="60" height="60" viewBox="0 0 24 24" stroke-width="1.5" stroke-linejoin="round"  xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 13a3.954 3.954 0 0 0 .142 1H9.858A3.954 3.954 0 0 0 10 13zm-3.5-4h3a2.486 2.486 0 0 1 1.945.949 3.992 3.992 0 0 1 .839-.547A3.485 3.485 0 0 0 13.5 8h-3a3.485 3.485 0 0 0-2.784 1.402 3.992 3.992 0 0 1 .84.547A2.486 2.486 0 0 1 10.5 9zM9 4a3 3 0 1 1 3 3 3.003 3.003 0 0 1-3-3zm1 0a2 2 0 1 0 2-2 2.002 2.002 0 0 0-2 2zM4.5 17h3a3.504 3.504 0 0 1 3.5 3.5V23H1v-2.5A3.504 3.504 0 0 1 4.5 17zm0 1A2.503 2.503 0 0 0 2 20.5V22h8v-1.5A2.503 2.503 0 0 0 7.5 18zM6 16a3 3 0 1 1 3-3 3.003 3.003 0 0 1-3 3zm0-1a2 2 0 1 0-2-2 2.002 2.002 0 0 0 2 2zm17 5.5V23H13v-2.5a3.504 3.504 0 0 1 3.5-3.5h3a3.504 3.504 0 0 1 3.5 3.5zm-1 0a2.503 2.503 0 0 0-2.5-2.5h-3a2.503 2.503 0 0 0-2.5 2.5V22h8zM21 13a3 3 0 1 1-3-3 3.003 3.003 0 0 1 3 3zm-1 0a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2z"/>
                    <path fill="none" d="M0 0h24v24H0z"/>
                </svg>
                    
                </div>
                <p>Tenemos un listado con todos nuestros clientes</p>
            </section>

            <section class="servicio">
                <h3>Categorias</h3>
                <div class="iconos">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="44"
                        height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="3" y="5" width="18" height="14" rx="3" />
                        <line x1="3" y1="10" x2="21" y2="10" />
                        <line x1="7" y1="15" x2="7.01" y2="15" />
                        <line x1="11" y1="15" x2="13" y2="15" />
                    </svg>
                </div>
                <p>Tenemos un listado con las categorias de cada producto y opciones para agregar, eliminar y editar cada uno de ellos </p>
            </section>

        </div>

   

    <section class="contacto">
        <h2>Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>
                    Contactanos llenando todos los campos
                </legend>
                <div class="contenedor-campos">
                <div class="campo">
                    <label>Nombre</label>
                    <input class="input-text" type="text" placeholder="Tu Nombre">
                </div>

                <div class="campo">
                    <label>Telefono</label>
                    <input class="input-text"  type="tel" placeholder="Tu Telefono">
                </div>

                <div class="campo">
                    <label>Correo</label>
                    <input class="input-text"  type="email" placeholder="Tu Correo Electronico">
                </div>

                <div class="campo">
                    <label>Mensaje</label>
                    <textarea class="input-text"  placeholder="Escribe Tu Mensaje"></textarea>
                </div>
</div>  <!-- .contenedor-campos-->


                <div class="alinear-derecha flex">
                    <input class="boton w-sm-100" type="submit" value="Enviar">
                </div>
            
            </fieldset>
        </form>

    </section>
</main>

    <footer class="footer">
        <p>Todos los derechos reservados. Juan Esteban Rozo</p>
    </footer>


</body>

</html>