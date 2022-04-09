@extends('dashboard.layout')

@section('content')
    <a href="{{ route('post.create') }}">Crear</a>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posted</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $p)
            <tr>
                <td>{{ $p->title }}</td>
                <td>{{ $p->category_id }}</td>
                <td>{{  $p->posted }}</td>
                <td>
                    <a href="{{ route('post.edit', $p) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="{{ route('post.show', $p) }}"><i class="fa-solid fa-eye"></i></a>
                    <form action="{{ route('post.destroy', $p) }}" method="post">
                        @method("DELETE")
                        @csrf
                        <button type="submit"><i class="fa-solid fa-eraser"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection