@extends('dashboard.layout')

@section('content')
    <h1>Actualizar Categoria: {{ $category->title }}</h1>
    @include('dashboard.fragment.errors-form')
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method("PUT")
        @include('dashboard.category.form')
    </form>
@endsection