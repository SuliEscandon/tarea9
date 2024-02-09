<?php
/**
 * Página que muestra imágenes aleatorias de perros cada 5 segundos.
 *
 * Esta página utiliza PHP para obtener imágenes aleatorias de perros de la API de Dog CEO,
 * y JavaScript para recargar la página cada 5 segundos y mostrar una nueva imagen.
 *
 * @author Suleiman Escandon Mulud.
 */

// Se realiza la petición a la API que devuelve el JSON con la información de los perros
$dog_json = file_get_contents('https://dog.ceo/api/breeds/image/random');

// Se decodifica el archivo JSON y se convierte a objeto
$dog = json_decode($dog_json);

// Se obtiene la URL de la imagen del perro
$dog_imagen_url = $dog->message;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES: Tarea 9</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 20px;
            background-color: grey; 
        }

        h1 {
            color: #333;
            background-color: lightblue;
        }

        img {
            width: 300px;
            height: 300px; 
        }
    </style>
</head>
<body>
<a href="doc/index.html"> Ver documentacion </a> <br>


    <h1> Imágenes de Perros, cambiando cada 6 segundos </h1>
    <!-- Se muestra la imagen del perro -->
    <img src="<?php echo $dog_imagen_url; ?>" alt="Imagen de Perro">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Cada 6 segundos (6000 milisegundos) se ejecutará la función refrescar
            setTimeout(refrescar, 6000);
        });

        function refrescar(){
            // Actualiza la página
            location.reload();
        }
    </script>
</body>
</html>
