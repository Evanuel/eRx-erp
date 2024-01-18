@extends('template.template')

@section('content')

    @foreach ($pjx as $pj)
        <h2 class="m-2">CODIGO: {{$pj->id}}</h2>
        <h2 class="m-2">RAZÃO SOCIAL: {{$pj->razao_soc}}</h2>
        <h2 class="m-2">NOME FANTASIA: {{$pj->nome_fant}}</h2>
        <h2 class="m-2">CNPJ: {{$pj->cnpj}}</h2>
    @endforeach    
@endsection