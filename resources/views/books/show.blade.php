@extends('templates.admin')

@section('header')
    Detalles del Libro
@endsection

@section('content')
<div class="max-w-md mx-auto">
    <h2 class="text-2xl font-bold mb-4">Detalles del Libro</h2>

    <div class="space-y-4">
        <div>
            <h3 class="text-lg font-medium text-gray-700">Título:</h3>
            <p class="text-gray-600 text-2xl">{{ $book->title }}</p>
        </div>
        <div>
            <h3 class="text-lg font-medium text-gray-700">Descripción:</h3>
            <p class="text-gray-600">{{ $book->description }}</p>
        </div>
        <div>
            <h3 class="text-lg font-medium text-gray-700">Precio:</h3>
            <p class="text-gray-600">S/. {{ $book->price }}</p>
        </div>
        <div>
            <h3 class="text-lg font-medium text-gray-700">Autor:</h3>
            <p class="text-gray-600 text-lg">{{ $book->author->name }}</p>
        </div>


        <div class="mt-4 flex justify-between space-x-4">
            <a href="{{ route('books.edit', $book->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-primary-dark transition">Editar</a>
            <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este autor?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-secondary-dark transition">Eliminar</button>
            </form>
        </div>


        <a href="{{ route('books.index') }}" class="block text-center mt-4 text-blue-500 hover:underline">
            Regresar Atrás
        </a>
    </div>
</div>

@endsection
