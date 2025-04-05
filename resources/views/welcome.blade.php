@extends('templates.admin')

@section('header')
    Autores
@endsection

@section('content')
    <h2>Bookres Soft</h2>
    <h2 class="text-4xl font-bold mb-4">Bienvenido al Gestor de Autores & Libros</h2>
    <p class="text-lg text-gray-600 mb-6">Selecciona una opción del menú para comenzar a registrar autores y sus libros.</p>
    <a href="{{ route('books.index') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ir al Registro</a>
    <a href="{{ route('authors.index') }}" class="inline-block bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">Ver Autores</a>

    <!-- Agregar contenido específico para la vista de autores aquí -->
@endsection

@section('scripts')
<style>
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
</style>
@endsection
