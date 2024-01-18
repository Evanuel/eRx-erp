@extends('template.template')
{{-- @extends('template.navbar') --}}
@section('content')
    {{-- <h1 class="m-2">Olá Mundo!</h1> --}}
    <h2>CONTROLE </h2>
    <p>{{ session()->get('success') ?: '' }}</p>
    <a href="{{ route('acesso.create') }}">CRIAR ACESSO</a>
    <table>
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>NOME</th>
            <th>HORARIO</th>
            <th>LOJA</th>
        </tr>
        
        @forelse ($acessos as $acesso)
        <tr>
            <td>{{ $loop->index + 1 }}</td>
            <td>{{ $acesso->pf }}</td>
            <td>{{ $acesso->obs }} </td>
            <td>{{ $acesso->entrada }}</td>
            {{-- <td>{{ $acesso->cnae}}></td> --}}
            <td><a href="{{ route('acesso.edit',$acesso->id) }}">EDITAR</a></td>
            <td><a href="{{ route('acesso.show',$acesso->id) }}">VER</a></td>
            <td><form method="POST" action="{{ route('acesso.destroy',$acesso->id) }}">
                    @csrf
                    @method('delete')
                    <button type="subimit"><i class="bi bi-trash">DELETE</i></button>
                </form>
            </td>
        </tr>
        @empty
            <p>SEM REGISTRO</p>
        @endforelse
    </table>
@endsection