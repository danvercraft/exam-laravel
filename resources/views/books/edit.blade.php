@extends('templates.admin')

@section('header')
    Editar Libro
@endsection

@section('content')

<div class="max-w-md mx-auto">
    <h2 class="text-2xl font-bold mb-4">Editar Libro</h2>

    <form action="{{ route('books.update', $book->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="description" id="description" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>{{ $book->description }}</textarea>
        </div>
        <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
            <input type="number" name="price" id="price" value="{{ $book->price }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div>
            <label for="author_id" class="block text-sm font-medium text-gray-700">Autor</label>
            <select name="author_id" id="author_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Actualizar
        </button>
    </form>
    <a href="{{ route('books.index') }}" class="block text-center mt-4 text-blue-500 hover:underline">Regresar al Índice</a>

</div>

@endsection
