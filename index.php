<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página con Botones y Cuestionario</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        // Array de preguntas
        var preguntas = [
            "¿Por que no gustas ser mi san valentin?",
            "Querida princesa di que SI",
            "¿Por favor?",
            "Se que veces me porto mal",
            "Mi dulce pancito di que si",
            "¿Preciosa doncella di que si?",
            ":3 esta raro todo esto nu",
            "Te quiero mucho se mi San Valentin",
            "Se que en el fondo si quieres",
            "¿Has visto que pasa si precionas SI?",
            "-v- di que si",
            "¿Quieres ver algo bonito di que SI?",
            "Mi dulce cielito preciona en si",
            "Hermosa niña de cabello ondulado di que si",
            "¿Segura que nu quieres?",
            "Si dices que si te regalo algo bonito",
            "Por cierto por que nu dices que Si",
            "Mi chocolatito di que si",
            "Mi chiquistrukis di que si :3",
            "Hola mi cielito aun nu pones que si",
            "-v- tengo mucha paciencia di que si",
            "Amo tu paciencia di que si",
        ];

        // Array de imágenes (agrega los links de las 30 imágenes)
        var imagenes = [
            "https://play-lh.googleusercontent.com/wYju0jrgI-SAOQD0guGmuSOzDmH2pmRQoH2fp7mG6tz8ZNflpknaWn2o-omI-34-Tbw=w600-h300-pc0xffffff-pd",
            "https://cdn.custom-cursor.com/packs/6217/cute-mochi-peach-and-goma-love-pack.png",
            "https://images.fineartamerica.com/images/artworkimages/medium/3/mochi-peach-cat-goma-leap-of-love-valentines-couples-lovers-eilifg-lex-transparent.png",
            "https://i.pinimg.com/originals/cb/29/51/cb2951d12eb952150efe93298a02bbf8.png",
            "https://images.fineartamerica.com/images/artworkimages/medium/3/mochi-peach-cat-goma-cats-in-your-heart-valentines-kittens-batyrz-abby-transparent.png",
            "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e7fdc63e-3b48-4a54-9174-d989a868b94b/delbtr7-cfe684b0-fa83-4f46-81ba-04272349e531.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2U3ZmRjNjNlLTNiNDgtNGE1NC05MTc0LWQ5ODlhODY4Yjk0YlwvZGVsYnRyNy1jZmU2ODRiMC1mYTgzLTRmNDYtODFiYS0wNDI3MjM0OWU1MzEucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.Tfnvb5VvP4O7ZV2Fx5q9F5oNTzlwOcYgk-b2t2bn__U",
            "https://i.pinimg.com/originals/9c/37/35/9c3735a5f81a1f913e8d973eb1371155.gif",
            "https://media3.giphy.com/media/IEm8kcqLVCctHJ1kWm/giphy.gif?cid=6c09b952xe2pv2qaxukkoipbna9d0z5su3n1bpzkzu5h9v87&ep=v1_stickers_search&rid=giphy.gif&ct=s",
            "https://i.pinimg.com/originals/79/65/92/796592e1bfb56fb5ca606ecd72e9b0bf.gif",
            "https://i.pinimg.com/originals/6e/04/f2/6e04f21067eb33422e383461fb31a2f3.gif",
            "https://media.tenor.com/JYS6f27lUiYAAAAj/peach-goma-love-heart-dance.gif",
            "https://media.tenor.com/2m4l360ccV4AAAAj/heart.gif",
            "https://media.tenor.com/PLxvoHUadb0AAAAj/bongo-cat-bongo.gif",
            "https://i.gifer.com/VeC.gif",
            "https://i.pinimg.com/originals/15/0f/78/150f78d18fd597611f77b4ae7d2f1f58.gif",
            "https://line-07.sakura.ne.jp/line/stamp/outline/a409258-0.png",
            "https://i.pinimg.com/originals/2d/4b/47/2d4b475d5fac25e7b7e02bc206c2fa2f.gif",
            "https://www.line-stickers.com/wp-content/uploads/2020/09/Jun-Lemon-Effect-Stickers-.png",
            "https://media.tenor.com/J4WA4IXVeBQAAAAC/love-you.gif",
            "https://media.tenor.com/5E98UTF-L_YAAAAj/happy-love.gif",
            "https://media.tenor.com/3GAsTSh04NkAAAAj/chibi-anime-boy.gif",
            "https://gifdb.com/images/high/cute-happy-excited-cat-gx339xf5f5zewrju.gif",
            "https://i.pinimg.com/originals/ae/50/66/ae50665d56599d1d93017266931e0ce7.gif",
            "https://i.pinimg.com/originals/55/06/17/550617519a5284215cd5b50a2d8467e6.gif",
            "https://media.tenor.com/OwA9Jzdq0CkAAAAM/love-fast.gif"
        ];

        // Variable para contar los clics en "No"
        var contadorNo = 0;

        // Función para generar un color aleatorio
        function generarColorAleatorio() {
            var letras = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letras[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        // Función para cambiar la pregunta de manera aleatoria
        function cambiarPregunta() {
            var preguntaAleatoria = preguntas[Math.floor(Math.random() * preguntas.length)];
            document.querySelector('h1').textContent = preguntaAleatoria; // Cambia el texto de la pregunta
        }

        // Función que se ejecuta al hacer clic en el botón "Sí"
        function botonSiPresionado() {
        var videoContainer = document.getElementById('video-container');
        
        // Cambiar el contenedor para incluir un iframe de YouTube
        videoContainer.innerHTML = '<iframe width="600" height="400" src="https://www.youtube.com/embed/T4hdylUvBkA?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        
        // Cambiar el color al azar cuando se presiona "Sí"
        document.querySelector('h1').style.color = generarColorAleatorio();

        // Cambiar el texto del título
        document.querySelector('h1').textContent = "Te amo mi pancito sabia que dirias que si";

        // Ocultar la imagen
        var imagen = document.querySelector('.imagen-cuestionario');
        imagen.style.display = "none"; // Esto hace que la imagen desaparezca

        // Ocultar los botones cuando se hace clic en "Sí"
        var botones = document.querySelector('.botones');
        botones.style.display = "none"; // Esto hace que los botones desaparezcan
    }

        // Función que se ejecuta al hacer clic en el botón "No"
        function botonNoPresionado() {
            cambiarPregunta();
            document.querySelector('h1').style.color = generarColorAleatorio();

            // Aumentar el tamaño del botón "Sí" en 10px y reducir el tamaño del botón "No" en 5px por cada clic en "No"
            contadorNo++;
            var botonSi = document.querySelector('button:nth-child(1)');
            var botonNo = document.querySelector('button:nth-child(2)');
            
            // Aumenta el tamaño del botón "Sí" en 10px de ancho y altura
            botonSi.style.width = (230 + (10 * contadorNo)) + 'px'; 
            botonSi.style.height = (80 + (10 * contadorNo)) + 'px'; 
            
            // Reduce el tamaño del botón "No" en 5px de ancho y altura
            botonNo.style.width = (230 - (2 * contadorNo)) + 'px'; 
            botonNo.style.height = (80 - (2 * contadorNo)) + 'px';

            // Cambiar la imagen a una aleatoria
            var imagenAleatoria = imagenes[Math.floor(Math.random() * imagenes.length)];
            document.querySelector('.imagen-cuestionario').src = imagenAleatoria;
        }

        // Cambiar el color del texto del título y mostrar una pregunta aleatoria
        window.onload = function() {
            var colorAleatorio = generarColorAleatorio();
            document.querySelector('h1').style.color = colorAleatorio; // Color aleatorio del texto
            document.querySelector('h1').textContent = "¿Quieres ser mi San Valentin?"; // Primera pregunta fija

            // Cambiar la imagen a una aleatoria al cargar la página
            var imagenAleatoria = imagenes[Math.floor(Math.random() * imagenes.length)];
            document.querySelector('.imagen-cuestionario').src = imagenAleatoria;
        }
    </script>
</head>
<body>
    <h1>¿Quieres ser mi San Valentin?</h1> <!-- Primera pregunta fija -->

    <img src="ruta/a/tu/imagen.jpg" alt="Imagen del cuestionario" class="imagen-cuestionario">

    <!-- Contenedor del video (vacío por ahora) -->
    <div id="video-container"></div>

    <!-- Botones para elegir respuesta -->
    <div class="botones">
        <button onclick="botonSiPresionado()">Sí</button>
        <button onclick="botonNoPresionado()">No</button>
    </div>
</body>
</html>
