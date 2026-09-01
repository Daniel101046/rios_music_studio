<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ríos Music Studio</title>

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

                    <a href="index.php" class="text-yellow-400">
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

                    <a href="contacto.php" class="hover:text-yellow-400">
                        Contacto
                    </a>

                    <!-- Login -->
                    <a href="login.php"
                       class="border border-yellow-500 text-yellow-400 px-4 py-2 rounded-lg hover:bg-yellow-500 hover:text-black">
                        Iniciar sesión
                    </a>

                    <!-- Register -->
                    <a href="registro.php"
                       class="bg-yellow-500 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-400">
                        Registrarse
                    </a>

                </div>

            </div>

        </nav>
    </header>


    <!-- Sección principal -->

    <main>

        <section class="min-h-[550px] flex items-center">

            <div class="max-w-6xl mx-auto px-6 py-20 w-full">

                <div class="max-w-3xl">

                    <p class="text-yellow-400 font-semibold mb-4">
                        RÍOS MUSIC STUDIO
                    </p>

                    <h1 class="text-5xl md:text-6xl font-bold leading-tight mb-6">
                        Todo lo que necesitas
                        para disfrutar la música.
                    </h1>

                    <p class="text-gray-400 text-lg leading-7 mb-8">
                        Un espacio dedicado a la música, donde
                        encontrarás servicios, productos y contenido
                        para aprender y mejorar tus habilidades.
                    </p>

                    <div class="flex flex-wrap gap-4">

                        <a href="servicios.php"
                           class="bg-yellow-500 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400">
                            Ver servicios
                        </a>

                        <a href="productos.php"
                           class="border border-gray-600 px-6 py-3 rounded-lg hover:bg-gray-800">
                            Ver productos
                        </a>

                    </div>

                </div>

            </div>

        </section>


        <!-- Servicios destacados -->

        <section class="bg-gray-900 py-16">

            <div class="max-w-6xl mx-auto px-6">

                <div class="text-center mb-10">

                    <h2 class="text-3xl font-bold mb-3">
                        ¿Qué encontrarás aquí?
                    </h2>

                    <p class="text-gray-400">
                        Conoce las diferentes opciones que ofrece
                        Ríos Music Studio.
                    </p>

                </div>


                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                    <!-- Tarjeta 1 -->

                    <div class="bg-gray-800 p-6 rounded-xl">

                        <h3 class="text-xl font-bold mb-3">
                            Servicios
                        </h3>

                        <p class="text-gray-400 mb-5">
                            Conoce nuestros servicios relacionados
                            con la enseñanza y práctica musical.
                        </p>

                        <a href="servicios.php"
                           class="text-yellow-400 hover:underline">
                            Ver servicios →
                        </a>

                    </div>


                    <!-- Tarjeta 2 -->

                    <div class="bg-gray-800 p-6 rounded-xl">

                        <h3 class="text-xl font-bold mb-3">
                            Productos
                        </h3>

                        <p class="text-gray-400 mb-5">
                            Encuentra instrumentos, accesorios y
                            otros productos relacionados con la música.
                        </p>

                        <a href="productos.php"
                           class="text-yellow-400 hover:underline">
                            Ver productos →
                        </a>

                    </div>


                    <!-- Tarjeta 3 -->

                    <div class="bg-gray-800 p-6 rounded-xl">

                        <h3 class="text-xl font-bold mb-3">
                            Contenido musical
                        </h3>

                        <p class="text-gray-400 mb-5">
                            Aprende y consulta diferentes contenidos
                            relacionados con la música.
                        </p>

                        <a href="contenido.php"
                           class="text-yellow-400 hover:underline">
                            Ver contenido →
                        </a>

                    </div>

                </div>

            </div>

        </section>


        <!-- Ejercicios -->

        <section class="py-16">

            <div class="max-w-6xl mx-auto px-6">

                <div class="bg-gray-900 rounded-2xl p-8 md:p-12">

                    <div class="max-w-2xl">

                        <h2 class="text-3xl font-bold mb-4">
                            Practica y mejora
                        </h2>

                        <p class="text-gray-400 leading-7 mb-6">
                            Accede a diferentes ejercicios musicales
                            que pueden ayudarte a desarrollar tus
                            conocimientos y habilidades.
                        </p>

                        <a href="ejercicios.php"
                           class="inline-block bg-yellow-500 text-black px-6 py-3 rounded-lg font-semibold hover:bg-yellow-400">
                            Ver ejercicios
                        </a>

                    </div>

                </div>

            </div>

        </section>


        <!-- Contacto -->

        <section class="bg-gray-900 py-16">

            <div class="max-w-6xl mx-auto px-6 text-center">

                <h2 class="text-3xl font-bold mb-4">
                    ¿Tienes alguna pregunta?
                </h2>

                <p class="text-gray-400 mb-6">
                    Comunícate con nosotros para conocer más
                    sobre nuestros productos y servicios.
                </p>

                <a href="contacto.php"
                   class="border border-yellow-500 text-yellow-400 px-6 py-3 rounded-lg hover:bg-yellow-500 hover:text-black">
                    Contáctanos
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
```

    </footer>

</body>
</html>

