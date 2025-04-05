@extends('templates.admin')

@section('header')
    Autores
@endsection

@section('content')
    <h2 class="text-2xl font-bold mb-4">Gestión de Autores</h2>

    <!-- Botón para agregar un nuevo autor -->
    <div class="mb-4">
        <a href="{{ route('authors.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Agregar Nuevo Autor
        </a>
    </div>

    <!-- Tabla responsiva para listar autores -->
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-left">Correo Electrónico</th>
                    <th class="py-3 px-6 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($authors as $author)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">
                            <a href="{{ route('authors.show', $author->id) }}" class="text-blue-500 hover:underline">
                                {{ $author->name }}
                            </a>
                        </td>
                        <td class="py-3 px-6 text-left">{{ $author->email }}</td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex items-center justify-center space-x-4">
                                <a href="{{ route('authors.edit', $author->id) }}" class="text-sm text-white bg-green-500 hover:bg-green-600 py-1 px-3 rounded">
                                    Editar
                                </a>
                                <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
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
