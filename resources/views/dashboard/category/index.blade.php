@extends('dashboard.layout')

@section('content')
    <a href="{{ route('category.create') }}">Crear</a>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $c)
            <tr>
                <td>{{ $c->title }}</td>
                <td>
                    <a href="{{ route('category.edit', $c) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{ route('category.show', $c) }}"><i class="fa-solid fa-eye"></i></a>
                    <form action="{{ route('category.destroy', $c) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit"><i class="fa-solid fa-eraser"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links() }}
@endsection