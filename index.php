<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="./img/estudiante.png" type="image/x-icon">
    <title>Promedio U</title>
</head>
<body>
    <header>
    <span class="material-symbols-outlined">
        speaker_notes
        </span>
        <h2>Promedio U</h2>
    </header>
    <main>
    <section class="contenedor__general">
        <div class="contenedor__header--general">
            <h3>calcula el promedio que necesitas</h3>
        </div>
        <div class="contenedor__parrafo--general">
        <p>1) Aquí puedes calcular tus notas y sacar el promedio que necesitás de cada período o corte final.</p>
        <p>2) Si necesitas ayuda dale Click en los botones de <button onclick="interrogacion()"><img src="./img/interrogacion.png" alt="ayuda"></button></p>
        </div>
        <hr>
        <div class="contenedor__formulario--general">
        <form action="./index.php" method="post">
            <div class="conteneodr__inicio--form">
            <label for="periodos">¿Total de periodos o cortes? </label>
            <div class="contenedor__botones">
            <input class="contenedorInputOne" type="text" name="inputs" placeholder="Cuantos?">
            <input class="btn_enviar" name="enviarform" type="submit" value="Generar">
            <button type="button"  onclick="informacionInicial()"><img src="./img/interrogacion.png" alt="ayuda"></button>
            </div>
            </div>
            <section class="contenedor__inputs--general">
                <?php include './inputs.php'; ?>
               <?php validacion()?> 
            </section>
        </form>
        </div>
    </section>
    </main>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="./alert.js"></script>
</body>
</html>