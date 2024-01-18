@extends('template.template-jtb-exp')
{{-- @extends('template.navbar') --}}
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>ORÇAMENTO</strong> {{$numero_proposta="0000"}}</h2>
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
                {{-- Table-suport --}}
                <div class="table-responsive">
                    <table id="tableExport" class="display table table-hover table-checkable order-column width-per-100">
                        <thead>
                            <tr>
                                <th>CODIGO</th>
                                <th>FOTO</th>
                                <th>DESCRIÇÃO</th>
                                <th>DISPONIBILIDADE</th>
                                <th>QTD</th>
                                <th>VALOR</th>
                                <th>SUBTOTAL</th>
                                <th>AÇÃO</th>
                            </tr>
                        </thead>
                        <img src="../../assets/images/user/user1.jpg" alt="">
                        <tbody>
                            @foreach ($Orc as $iOrc)
                                <tr>
                                    <th scope="row">{{$iOrc->id}}</th>
                                    <td>{{$iOrc->}}</td>
                                    <td>{{$iOrc->razao_soc}}</td>
                                    <td>{{$iOrc->nome_fant}}</td>
                                    <td>{{$iOrc->logradouro."; Nº: ".$pj->numero."; BAIRRO: ".$pj->bairro}}</td>
                                    <td>{{$iOrc->grupo_a}}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <button type="button" class="btn btn-outline-HN"><a href="orc/{{$pj->id}}">Ver</a></button>
                                            <button type="button" class="btn btn-outline-warning"><a href="orc/{{$pj->id}}/edit">Editar</a></button>
                                            <button type="button" class="btn btn-outline-danger">Apagar</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>CODIGO</th>
                                <th>FOTO</th>
                                <th>DESCRIÇÃO</th>
                                <th>DISPONIBILIDADE</th>
                                <th>QTD</th>
                                <th>VALOR</th>
                                <th>SUBTOTAL</th>
                                <th>AÇÃO</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                {{-- Table-suport --}}



            </div>
        </div>
    </div>
</div>
@endsection