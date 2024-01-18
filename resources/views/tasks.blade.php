@extends('template.template')
{{-- @extends('template.navbar') --}}
@section('content')
    <h1 class="m-2">Pagina Tasks</h1>
    <table class="table table-striped">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">TITULO</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">STATUS</th>
            <th scope="col">AÇÃO</th>
          </tr>
        </thead>
        <tbody>
            
            @foreach ($tasks as $task)
            <tr>
                <th scope="row">{{$task->id}}</th>
                <td>{{$task->title}}</td>
                <td>{{$task->desc}}</td>
                <td>
                    {{$task->status}}
                {{-- @if ({{$task->status}} === 1)
                    <i class="bi bi-check"></i>
                @else
                    <i class="bi bi-x-circle"></i>
                @endif --}}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-outline-HN">Ver</button>
                        <button type="button" class="btn btn-outline-warning">Editar</button>
                        <button type="button" class="btn btn-outline-danger">Apagar</button>
                    </div>
                </td>
            </tr>
            @endforeach    
        </tbody>
    </table>

@endsection