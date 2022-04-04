@extends('layout.master')

@section('content')
    @include('fragment.subview')
    @forelse($post as $a)
    <div class="box item">
        <p>*{{$a}}</p>
    </div>
    @empty
        No hay datos en la Base de Datos.
    @endforelse
@endsection