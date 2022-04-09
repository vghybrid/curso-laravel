@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Post: {{ $post->title }}</h1>
    @include('dashboard.fragment.errors-form')
    <form action="{{ route('post.update', $post->id) }}" method="post">
        @method("PUT")
        @include('dashboard.post.form')
    </form>
@endsection