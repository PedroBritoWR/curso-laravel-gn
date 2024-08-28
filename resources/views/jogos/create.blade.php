@extends('layouts.app')

@section('title', 'Criação')


@section('content')
    <div class="container">
        <h1>Cadastre um novo jogo</h1>
        <hr />
        <form action="{{route('jogos-store')}}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" placeholder="Digite o nome do jogo..."/>
                </div>
                <br>
                <div class="form-group">
                    <label for="categoria">Categoria:</label>
                    <input class="form-control" type="text" name="categoria" placeholder="Determine a categoria do jogo..."/>
                </div>
                <br>
                <div class="form-group">
                    <label for="ano_criacao">Ano de criação:</label>
                    <input class="form-control" type="number" name="ano_criacao" placeholder="Digite o ano de criação do jogo..."/>
                </div>
                <br>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input class="form-control" type="number" name="valor" placeholder="Digite o preço do jogo..."/>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary"/>
                </div>

            </div>
        </form>
    </div>
@endsection
