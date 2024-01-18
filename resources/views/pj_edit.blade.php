@extends('template.template')
@section('content')
    <h2 class="m-2 h1">EDITAR PESSOA JURIDICA</h1>
    <form action="{{route('pj.update', $pjx->id)}}" method="post">
        @csrf
        @method('patch')
        <input class="form-control" type="text" placeholder="name" name="nome_fantasia" value="{{$pjx->nome_fant}}">
        <button type="submit">update</button>
    </form>
@endsection