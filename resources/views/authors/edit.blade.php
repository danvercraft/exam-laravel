@extends('templates.admin')

@section('header', 'Editar Autor')

@section('content')
<div class="max-w-md mx-auto">
    <h2 class="text-xl font-bold mb-4">Editar Autor</h2>
    <form action="{{ route('authors.update', $author->id) }}" method="POST" class="space-y-4 animate-fade-in">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" id="name" name="name" value="{{ $author->name }}" class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <div>
            <label for="bio" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
            <input id="email" name="email" value="{{ $author->email }}" class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-300" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition">Actualizar</button>
    </form>
    <a href="{{ route('authors.index') }}" class="block text-center mt-4 text-blue-500 hover:underline">Regresar al Índice</a>
</div>
@endsection
