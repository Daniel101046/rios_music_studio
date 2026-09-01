
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contacto - Ríos Music Studio</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>


<body class="bg-gray-950 text-white">


    <!-- Barra de navegación -->

    <header class="bg-gray-900 border-b border-gray-800">

        <nav class="max-w-6xl mx-auto px-6 py-4">

            <div class="flex flex-wrap items-center justify-between">

                <a href="index.php" class="text-2xl font-bold">
                    Ríos Music Studio
                </a>


                <div class="flex flex-wrap items-center gap-5 mt-3 md:mt-0 text-sm">

                    <a href="index.php" class="hover:text-yellow-400">
                        Inicio
                    </a>

                    <a href="servicios.php" class="hover:text-yellow-400">
                        Servicios
                    </a>

                    <a href="productos.php" class="hover:text-yellow-400">
                        Productos
                    </a>

                    <a href="contenido.php" class="hover:text-yellow-400">
                        Contenido
                    </a>

                    <a href="ejercicios.php" class="hover:text-yellow-400">
                        Ejercicios
                    </a>

                    <a href="contacto.php" class="text-yellow-400">
                        Contacto
                    </a>

                    <a href="login.php"
                       class="border border-yellow-500 text-yellow-400 px-4 py-2 rounded-lg hover:bg-yellow-500 hover:text-black">
                        Iniciar sesión
                    </a>

                    <a href="registro.php"
                       class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400">
                        Registrarse
                    </a>

                </div>

            </div>

        </nav>

    </header>


    <!-- Encabezado -->

    <main>

        <section class="py-20">

            <div class="max-w-6xl mx-auto px-6 text-center">

                <p class="text-yellow-400 font-semibold mb-3">
                    RÍOS MUSIC STUDIO
                </p>

                <h1 class="text-5xl font-bold mb-5">
                    Contáctanos
                </h1>

                <p class="text-gray-400 max-w-2xl mx-auto leading-7">
                    ¿Tienes alguna pregunta sobre nuestros productos
                    o servicios? Escríbenos y estaremos atentos para
                    ayudarte.
                </p>

            </div>

        </section>


        <!-- Contacto -->

        <section class="pb-20">

            <div class="max-w-6xl mx-auto px-6">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">


                    <!-- Información -->

                    <div>

                        <h2 class="text-3xl font-bold mb-6">
                            Información de contacto
                        </h2>

                        <p class="text-gray-400 leading-7 mb-8">
                            Puedes comunicarte con Ríos Music Studio
                            para obtener información sobre nuestros
                            servicios, productos y contenido musical.
                        </p>


                        <div class="space-y-6">

                            <div>

                                <h3 class="text-yellow-400 font-semibold">
                                    Correo electrónico
                                </h3>

                                <p class="text-gray-400 mt-1">
                                    danielrios@colegioguanenta.edu.co
                                </p>

                            </div>


                            <div>

                                <h3 class="text-yellow-400 font-semibold">
                                    Teléfono
                                </h3>

                                <p class="text-gray-400 mt-1">
                                    +57 3223728006
                                </p>

                            </div>


                            <div>

                                <h3 class="text-yellow-400 font-semibold">
                                    Ubicación
                                </h3>

                                <p class="text-gray-400 mt-1">
                                    San Gil, Santander, Colombia
                                </p>

                            </div>


                            <div>

                                <h3 class="text-yellow-400 font-semibold">
                                    Horario de atención
                                </h3>

                                <p class="text-gray-400 mt-1">
                                    Lunes a sábado
                                </p>

                            </div>

                        </div>

                    </div>


                    <!-- Formulario -->

                    <div class="bg-gray-900 border border-gray-800 rounded-xl p-8">

                        <h2 class="text-2xl font-bold mb-6">
                            Envíanos un mensaje
                        </h2>


                        <form action="#" method="POST" class="space-y-5">


                            <!-- Nombre -->

                            <div>

                                <label class="block text-sm mb-2">
                                    Nombre
                                </label>

                                <input
                                    type="text"
                                    name="nombre"
                                    placeholder="Escribe tu nombre"
                                    required
                                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 outline-none focus:border-yellow-500"
                                >

                            </div>


                            <!-- Correo -->

                            <div>

                                <label class="block text-sm mb-2">
                                    Correo electrónico
                                </label>

                                <input
                                    type="email"
                                    name="correo"
                                    placeholder="correo@ejemplo.com"
                                    required
                                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 outline-none focus:border-yellow-500"
                                >

                            </div>


                            <!-- Asunto -->

                            <div>

                                <label class="block text-sm mb-2">
                                    Asunto
                                </label>

                                <input
                                    type="text"
                                    name="asunto"
                                    placeholder="¿Sobre qué quieres preguntar?"
                                    required
                                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 outline-none focus:border-yellow-500"
                                >

                            </div>


                            <!-- Mensaje -->

                            <div>

                                <label class="block text-sm mb-2">
                                    Mensaje
                                </label>

                                <textarea
                                    name="mensaje"
                                    rows="5"
                                    placeholder="Escribe tu mensaje..."
                                    required
                                    class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-3 outline-none focus:border-yellow-500"
                                ></textarea>

                            </div>


                            <!-- Botón -->

                            <button
                                type="submit"
                                class="w-full bg-yellow-500 text-black py-3 rounded-lg font-semibold hover:bg-yellow-400">

                                Enviar mensaje

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </section>


        <!-- Sección final -->

        <section class="bg-gray-900 py-16">

            <div class="max-w-5xl mx-auto px-6 text-center">

                <h2 class="text-3xl font-bold mb-4">
                    Gracias por visitar Ríos Music Studio
                </h2>

                <p class="text-gray-400 mb-7">
                    Esperamos poder ayudarte a seguir desarrollando
                    tu pasión por la música.
                </p>

                <a href="index.php"
                   class="inline-block bg-yellow-500 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400">

                    Volver al inicio

                </a>

            </div>

        </section>

    </main>


    <!-- Pie de página -->

    <footer class="bg-gray-950 border-t border-gray-800 py-8">

        <div class="max-w-6xl mx-auto px-6 text-center">

            <h3 class="font-bold text-lg">
                Ríos Music Studio
            </h3>

            <p class="text-gray-500 text-sm mt-2">
                Música, aprendizaje y pasión.
            </p>

            <p class="text-gray-600 text-xs mt-4">
                © 2032 Ríos Music Studio
            </p>

        </div>

    </footer>


</body>
</html>

