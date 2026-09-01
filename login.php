
<?php

session_start();

include("includes/conexion.php");

$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $correo = $_POST["correo"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuario WHERE correo = ?";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $correo);
    $stmt->execute();

    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {

        $usuario = $resultado->fetch_assoc();

        // Comprobar contraseña
        if (password_verify($password, $usuario["password"])) {

            $_SESSION["id_usuario"] = $usuario["id_usuario"];
            $_SESSION["nombre"] = $usuario["nombre"];
            $_SESSION["correo"] = $usuario["correo"];

            header("Location: index.php");
            exit();

        } else {

            $mensaje = "La contraseña es incorrecta.";

        }

    } else {

        $mensaje = "No existe una cuenta con ese correo.";

    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Iniciar sesión - Ríos Music Studio</title>

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

                    <a href="registro.php" class="hover:text-yellow-400">
                        Registrarse
                    </a>

                </div>

            </div>

        </nav>

    </header>


    <!-- Formulario -->

    <main class="max-w-md mx-auto px-6 py-16">

        <div class="bg-gray-900 rounded-2xl p-8 border border-gray-800">

            <h1 class="text-3xl font-bold mb-2">
                Iniciar sesión
            </h1>

            <p class="text-gray-400 mb-8">
                Ingresa a tu cuenta de Ríos Music Studio.
            </p>


            <?php if ($mensaje != ""): ?>

                <div class="bg-red-900 text-red-200 p-4 rounded-lg mb-6">

                    <?php echo $mensaje; ?>

                </div>

            <?php endif; ?>


            <form method="POST" class="space-y-5">

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
                        class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 outline-none focus:border-yellow-500"
                        placeholder="Tu contraseña"
                    >

                </div>


                <button
                    type="submit"
                    class="w-full bg-yellow-500 text-black py-3 rounded-lg font-semibold hover:bg-yellow-400">

                    Iniciar sesión

                </button>

            </form>


            <p class="text-center text-gray-400 mt-6 text-sm">

                ¿No tienes una cuenta?

                <a href="registro.php"
                   class="text-yellow-400 hover:underline">

                    Regístrate

                </a>

            </p>

        </div>

    </main>

</body>
</html>

