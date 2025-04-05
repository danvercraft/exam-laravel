@extends('templates.admin')

@section('header', 'Crear Autor')

@section('content')
<div class="max-w-md mx-auto">
    <h2 class="text-xl font-bold mb-4">Nuevo Autor</h2>
    <form action="{{ route('authors.store') }}" method="POST" class="space-y-4 animate-fade-in">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <div>
            <label for="bio" class="block text-sm font-medium text-gray-700">Email</label>
            <input id="email" name="email" class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">Guardar</button>
    </form>
    <a href="{{ route('authors.index') }}" class="block text-center mt-4 text-blue-500 hover:underline">Regresar al Índice</a>
</div>
@endsection
