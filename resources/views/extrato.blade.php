@extends('template.template-jtb-exp')
{{-- @extends('template.navbar') --}}

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    <strong>MOVIMENTAÇÕES</strong> {{$numero_proposta="0000"}}</h2>
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
                                <th>SENTIDO</th>
                                <th>REF.</th>
                                <th>DESCRIÇÃO</th>
                                <th>ID BEN</th>
                                <th>BENEF.</th>
                                <th>VENC.</th>
                                <th>VALOR</th>
                                <th>PAGO EM</th>
                                <th>VALOR PG</th>
                                <th>ESTADO</th>
                                <th>CRIADO POR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"><a href="/extrato/1">0001</a></th>
                                <td>Saida</td>
                                <td>NF 0110</td>
                                <td>descricação</td>
                                <td>01</td>
                                <td>Evanuel</td>
                                <td>25/08/23</td>
                                <td>R$ 100,00</td>
                                <td></td>
                                <td></td>
                                <td>AGENDADO</td>
                                <td>Evanuel</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="/extrato/2">0002</a></th>
                                <td>Saida</td>
                                <td>NF 0111</td>
                                <td>descricação</td>
                                <td>01</td>
                                <td>Evanuel</td>
                                <td>25/08/23</td>
                                <td>R$ 100,00</td>
                                <td>25/08/23</td>
                                <td>R$ 100,00</td>
                                <td>PAGO</td>
                                <td>Evanuel</td>
                            </tr>
                            <tr>
                                <th scope="row"><a href="/extrato/3">0003</a></th>
                                <td>Entrada</td>
                                <td>NF 0112</td>
                                <td>descricação</td>
                                <td>01</td>
                                <td>Evanuel</td>
                                <td>25/08/23</td>
                                <td>R$ 100,00</td>
                                <td>25/08/23</td>
                                <td>R$ 100,00</td>
                                <td>PAGO</td>
                                <td>Evanuel</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- Table-suport --}}
            </div>
        </div>
    </div>
</div>
@endsection