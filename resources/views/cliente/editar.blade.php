@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <ol class="breadcrumb panel-heading">
                    <li><a href="{{ route('cliente.index') }}">Clientes </a></li>
                    /
                    <li class="active"> Editar</li>
                </ol>

                <div class="card-body">
                    <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" placeholder="Nome do cliente" value= "{{ $cliente->nome }}">
                        </div>
                        <div class="form-group">
                            <label for="nome">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email do cliente" value= "{{ $cliente->email }}">
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label>
                            <input type="text" name="endereco" class="form-control" placeholder="Endereço do cliente" value= "{{ $cliente->endereco }}" >
                        </div>
                        <button class="btn btn-info">Salvar</button>
                    
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection