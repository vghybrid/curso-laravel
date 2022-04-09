@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post: {{ $post->title }}</h1>
    @include('dashboard.fragment.errors-form')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf
        @method("PUT")
        <label for="">Titulo</label>
        <input type="text" name="title" id="" value="{{ $post->title }}">
        <label for="">Slug</label>
        <input type="text" name="slug" id="" readonly value="{{ $post->slug }}">
        <label for="">Categorias</label>
        <select name="category_id" id="">
            <option value="" selected disabled></option>
            @foreach ($categories as $title => $id)
                <option {{ $post->category_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
            @endforeach
        </select>
        <label for="">Posteado</label>
        <select name="posted" id="">
            <option {{ $post->posted == "yes" ? 'selected' : '' }} value="yes">Si</option>
            <option {{ $post->posted == "not" ? 'selected' : '' }} value="not">No</option>
        </select>
        <label for="">Contenido</label>
        <textarea name="content" id="">{{ $post->content }}</textarea>
        <label for="">Descripción</label>
        <textarea name="description" id="">{{ $post->description }}</textarea>
        <button type="submit">Enviar</button>
    </form>
@endsection