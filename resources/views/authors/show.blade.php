@extends('templates.admin')

@section('header', 'Detalles del Autor')

@section('content')
<div class="max-w-md mx-auto">
    <h2 class="text-xl font-bold mb-4">Detalles del Autor</h2>

    <div class="bg-white p-4 rounded shadow-md animate-fade-in">
        <p><strong>Nombre:</strong> </p>
        <p class="text-gray-700 text-2xl">{{ $author->name }}</p>
        <p class="mt-2"><strong>Email:</strong></p>
        <p class="text-gray-700">{{ $author->email }}</p>
    </div>

    <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">Libros del Autor</h3>
        <div class="bg-white p-4 rounded shadow-md">
            @if($author->books->isEmpty())
                <p class="text-gray-400">Este autor no tiene libros registrados.</p>
            @else
                <ul class="divide-y divide-gray-200">
                    @foreach($author->books as $book)
                        <li class="py-2">
                            <p class="text-gray-800 font-medium">{{ $book->title }}</p>
                            <p class="text-sm text-gray-600">Publicado: {{ $book->created_at->format('d/m/Y') }}</p>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>

    <div class="mt-4 flex justify-between space-x-4">
        <a href="{{ route('authors.edit', $author->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-primary-dark transition">Editar</a>
        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este autor?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-secondary-dark transition">Eliminar</button>
        </form>
    </div>
    <a href="{{ route('authors.index') }}" class="block text-center mt-4 text-blue-500 hover:underline">Regresar Atrás</a>
</div>
@endsection
