<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>

    <!-- Importar Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuButton = document.getElementById('menu-button');
            const menu = document.getElementById('menu');

            menuButton.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        });
    </script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    {{-- Cabecera del Panel --}}
    <header class="bg-gray-800 text-white p-4 flex justify-between items-center">
        <h1 class="text-lg font-bold"><strong>Panel</strong> | @yield('header')</h1>
        <button id="menu-button" class="text-sm bg-gray-700 px-3 py-1 rounded hover:bg-gray-600">Menú</button>
    </header>

    {{-- Nav Menu --}}
    <nav id="menu" class="bg-white shadow-md p-4 hidden">
        <ul class="space-y-2">
            <li><a href="{{ route('home') }}" class="block text-blue-500 hover:text-blue-700">Página Principal</a></li>
            <li><a href="{{ route('authors.index') }}" class="block text-blue-500 hover:text-blue-700">Módulo Autores</a></li>
            <li><a href="{{ route('books.index') }}" class="block text-blue-500 hover:text-blue-700">Módulo Libros</a></li>
        </ul>
    </nav>

    {{-- Contenido Central --}}
    <main class="p-4">
        <section class="bg-white p-6 rounded shadow-md text-center animate-fade-in">
            @yield('content')
        </section>
    </main>


    <footer class="bg-gray-100 text-center text-sm text-gray-500 p-2">
        <p>&copy; 2023 Panel de Administrador</p>
    </footer>
    @yield('scripts')

</body>
</html>
