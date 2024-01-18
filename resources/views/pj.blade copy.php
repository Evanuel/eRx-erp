@extends('template.template')
{{-- @extends('template.navbar') --}}
@section('content')
    <h1 class="m-2">Pagina Tasks</h1>
        <table class="table table-striped">
            <thead class="table-dark">
            <tr>
                <th scope="col">CODIGO</th>
                <th scope="col">RAZÃO SOCIAL</th>
                <th scope="col">NOME  FANTASIA</th>
                <th scope="col">CNPJ</th>
                <th scope="col">AÇÃO</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($PJ as $pj)
                <tr>
                    <th scope="row">{{$pj->id}}</th>
                    <td>{{$pj->razao_soc}}</td>
                    <td>{{$pj->nome_fant}}</td>
                    <td>
                        {{$pj->cnpj}}
                    {{-- @if ({{$task->status}} === 1)
                        <i class="bi bi-check"></i>
                    @else
                        <i class="bi bi-x-circle"></i>
                    @endif --}}
                    </td>
                    <td>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                            <button type="button" class="btn btn-outline-HN"><a href="pj/{{$pj->id}}">Ver</a></button>
                            <button type="button" class="btn btn-outline-warning"><a href="pj/{{$pj->id}}/edit">Editar</a></button>
                            <button type="button" class="btn btn-outline-danger">Apagar</button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
@endsection