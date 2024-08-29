@extends('layouts.app')

@section('title', 'Edição')


@section('content')
    <div class="container">
        <h1>Editar jogo</h1>
        <hr />
        <form action="{{route('jogos-update', ['id'=>$jogos->id])}}" method="POST" class="mt-4">
            @csrf
            @method('PUT')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" value="{{$jogos->nome}}" placeholder="Digite o nome do jogo..."/>
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input class="form-control" type="text" name="categoria" value="{{$jogos->categoria}}" placeholder="Determine a categoria do jogo..."/>
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de criação:</label>
                    <input class="form-control" type="number" name="ano_criacao" value="{{$jogos->ano_criacao}}" placeholder="Digite o ano de criação do jogo..."/>
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input class="form-control" type="number" name="valor" value="{{$jogos->valor}}" placeholder="Digite o preço do jogo..."/>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary" value="atualizar"/>
                </div>

            </div>
        </form>
    </div>
@endsection
