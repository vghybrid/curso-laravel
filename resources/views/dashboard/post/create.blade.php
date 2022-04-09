@extends('dashboard.layout')

@section('content')
    <h1>Crear Post</h1>
    @include('dashboard.fragment.errors-form')
    <form action="{{ route('post.store') }}" method="post">
        @csrf

        <label for="">Titulo</label>
        <input type="text" name="title" id="" value="{{ old("title", "") }}">
        <label for="">Slug</label>
        <input type="text" name="slug" id="" value="{{ old("slug", "") }}">
        <label for="">Categorias</label>
        <select name="category_id" id="">
            <option value="" selected disabled></option>
            @foreach ($categories as $title => $id)
                <option {{ old("category_id", "") == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
        <label for="">Posteado</label>
        <select name="posted" id="">
            <option {{ old("posted", "") == "not" ? 'selected' : '' }} value="not">No</option>
            <option {{ old("posted", "") == "yes" ? 'selected' : '' }} value="yes">Si</option>
        </select>
        <label for="">Contenido</label>
        <textarea name="content" id="">{{ old("content", "") }}</textarea>
        <label for="">Descripción</label>
        <textarea name="description" id="">{{ old("description", "") }}</textarea>
        <button type="submit">Enviar</button>
    </form>
@endsection