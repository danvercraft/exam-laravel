@extends('templates.admin')

@section('header')
    Libros
@endsection

@section('content')
    <h2 class="text-2xl font-bold mb-4">Gestión de Libros</h2>

    <div class="mb-4">
        <a href="{{ route('books.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Agregar Nuevo Libro
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Título</th>
                    <th class="py-3 px-6 text-left">Descripción</th>
                    <th class="py-3 px-6 text-left">Precio</th>
                    <th class="py-3 px-6 text-left">Autor</th>
                    <th class="py-3 px-6 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($books as $book)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">
                            <a href="{{ route('books.show', $book->id) }}" class="text-blue-500 hover:underline">
                                {{ $book->title }}
                            </a>
                        </td>
                        <td class="py-3 px-6 text-left">{{ $book->description }}</td>
                        <td class="py-3 px-6 text-left">{{ $book->price }}</td>
                        <td class="py-3 px-6 text-left">{{ $book->author->name }}</td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center space-x-4">
                                <a href="{{ route('books.edit', $book->id) }}" class="text-sm text-white bg-green-500 hover:bg-green-600 py-1 px-3 rounded">
                                    Editar
                                </a>
                                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-sm text-white bg-red-500 hover:bg-red-600 py-1 px-3 rounded">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
