@extends('template.template-jtb')
{{-- @extends('template.navbar') --}}
@section('content')
    <!-- Basic Examples -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        <strong>PROPOSTAS</strong> ORC</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);">Action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Another action</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">Something else here</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                                <tr>
                                    <th>CODIGO</th>
                                    <th>NOME</th>
                                    <th>RAZÃO SOCIAL</th>
                                    <th>CATEGORIA</th>
                                    <th>VALOR</th>
                                    <th>TIPO</th>
                                    <th>AÇÃO</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($PJ as $pj)
                                <tr>
                                    <th scope="row">{{$pj->id}}</th>
                                    <td>{{$pj->cnpj}}</td>
                                    <td>{{$pj->razao_soc}}</td>
                                    <td>{{$pj->nome_fant}}</td>
                                    <td>{{$pj->logradouro."; Nº: ".$pj->numero."; BAIRRO: ".$pj->bairro}}</td>
                                    <td>{{$pj->grupo_a}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-HN"><a href="pj/{{$pj->id}}">Ver</a></button>
                                            <button type="button" class="btn btn-outline-warning"><a href="pj/{{$pj->id}}/edit">Editar</a></button>
                                            {{-- <button type="button" class="btn btn-outline-danger">Apagar</button> --}
                                            <button class="btn btn-danger waves-effect" data-type="confirm">APAGAR</button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection