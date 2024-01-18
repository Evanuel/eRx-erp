@extends('template.template')
{{-- @extends('template.navbar') --}}
@section('content')
    
        @foreach ($task as $tsk)
            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                <button type="button" class="btn btn-outline-warning">Editar</button>
                <button type="button" class="btn btn-outline-danger">Apagar</button>
            </div>
            <h1 class="m-2">Codigo: {{$tsk->id}}</h1>
            <h2 class="m-2">Titulo: {{$tsk->title}}</h2>
            <h2 class="m-2">Descrição: {{$tsk->desc}}</h2>
            
            {{-- @if ({{$tsk->status}} is 1)
                <h2 class="m-2">Status: {{$tsk->status}}</h2>              
            @else
                <h2 class="m-2">Pendente</h2>
            @endif --}}
        @endforeach
@endsection