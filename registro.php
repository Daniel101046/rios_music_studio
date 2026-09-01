
<?php

include("includes/conexion.php");

$mensaje = "";
$tipo = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    // Verificar si el correo ya existe
    $consulta = "SELECT id_usuario FROM usuario WHERE correo = ?";
    $stmt = $conexion->prepare($consulta);
    $stmt->bind_param("s", $correo);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {

        $mensaje = "Este correo ya está registrado.";
        $tipo = "error";

    } else {

        // Encriptar contraseña
        $password_segura = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuario (nombre, correo, password)
                VALUES (?, ?, ?)";

        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sss", $nombre, $correo, $password_segura);

        if ($stmt->execute()) {

            $mensaje = "Registro exitoso. Ya puedes iniciar sesión.";
            $tipo = "exito";

        } else {

            $mensaje = "Ocurrió un error al registrarte.";
            $tipo = "error";

        }
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registrarse - Ríos Music Studio</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-950 text-white min-h-screen">

    <!-- Barra de navegación -->

    <header class="bg-gray-900 border-b border-gray-800">

        <nav class="max-w-6xl mx-auto px-6 py-4">

            <div class="flex flex-wrap items-center justify-between">

                <a href="index.php" class="text-2xl font-bold">
                    Ríos Music Studio
                </a>

                <div class="flex gap-5 text-sm">

                    <a href="index.php" class="hover:text-yellow-400">
                        Inicio
                    </a>

                    <a href="login.php" class="hover:text-yellow-400">
                        Iniciar sesión
                    </a>

                </div>

            </div>

        </nav>

    </header>


    <!-- Formulario -->

    <main class="max-w-md mx-auto px-6 py-16">

        <div class="bg-gray-900 rounded-2xl p-8 border border-gray-800">

            <h1 class="text-3xl font-bold mb-2">
                Crear cuenta
            </h1>

            <p class="text-gray-400 mb-8">
                Regístrate en Ríos Music Studio.
            </p>


            <?php if ($mensaje != ""): ?>

                <div class="mb-6 p-4 rounded-lg
                    <?php
                    echo ($tipo == "exito")
                        ? "bg-green-900 text-green-200"
                        : "bg-red-900 text-red-200";
                    ?>">

                    <?php echo $mensaje; ?>

                </div>

            <?php endif; ?>


            <form method="POST" class="space-y-5">

                <div>

                    <label class="block mb-2 text-sm">
                        Nombre
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        required
                        class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 outline-none focus:border-yellow-500"
                        placeholder="Escribe tu nombre"
                    >

                </div>


                <div>

                    <label class="block mb-2 text-sm">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        name="correo"
                        required
                        class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 outline-none focus:border-yellow-500"
                        placeholder="correo@ejemplo.com"
                    >

                </div>


                <div>

                    <label class="block mb-2 text-sm">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        minlength="6"
                        class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 outline-none focus:border-yellow-500"
                        placeholder="Mínimo 6 caracteres"
                    >

                </div>


                <button
                    type="submit"
                    class="w-full bg-yellow-500 text-black py-3 rounded-lg font-semibold hover:bg-yellow-400">

                    Registrarme

                </button>

            </form>


            <p class="text-center text-gray-400 mt-6 text-sm">

                ¿Ya tienes una cuenta?

                <a href="login.php"
                   class="text-yellow-400 hover:underline">

                    Inicia sesión

                </a>

            </p>

        </div>

    </main>

</body>
</html>

