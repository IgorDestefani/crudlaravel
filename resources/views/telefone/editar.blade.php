@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes </a></li>
                    /
                    <li><a href="{{ route('cliente.detalhe', $telefone->cliente->id) }}">Detalhe </a></li>
                    /
                    <li class="active"> Editar</li>
                </ol>

                <div class="card-body">
                <p><b>Cliente: </b>{{ $telefone->cliente->nome }}</p>
                    <form action="{{ route('telefone.atualizar', $telefone->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="nome">Título</label>
                            <input type="text" name="titulo" class="form-control" placeholder="Título do telefone" value="{{ $telefone->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="nome">Número</label>
                            <input type="text" name="telefone" class="form-control" placeholder="Número do telefone" value="{{ $telefone->telefone }}">
                        </div>

                        <button class="btn btn-info">Atualizar</button>
                    
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection