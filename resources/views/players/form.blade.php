@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('home') }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if( Request::is('*/edit'))

                    <form action="{{ url('home/update') }}/{{ $player->id }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="player-name" class="col-form-label">Nome: </label>
                            <input type="text" name="name" value="{{ $player->name }}" class="form-control" id="player-name">
                        </div>
                        <div class="form-group">
                            <label for="player-height" class="col-form-label">Altura(M): </label>
                            <input type="text" name="height"value="{{ $player->height }}" class="form-control" id="player-height">
                        </div>
                        <div class="form-group">
                            <label for="player-number" class="col-form-label">Numero: </label>
                            <input type="number" name="number" value="{{ $player->number }}" class="form-control" id="player-number">
                        </div> 

                        <button type="submit" class="btn btn-primary">Atualizar</button> 
                    </form>

                    @else

                    <form action="{{ url('home/add') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="player-name" class="col-form-label">Nome: </label>
                            <input type="text" name="name" placeholder="Tyler" class="form-control" id="player-name">
                        </div>
                        <div class="form-group">
                            <label for="player-height" class="col-form-label">Altura(M): </label>
                            <input type="text" name="height" placeholder="1.96" class="form-control" id="player-height">
                        </div>
                        <div class="form-group">
                            <label for="player-number" class="col-form-label">Numero: </label>
                            <input type="number" name="number" placeholder="14" class="form-control" id="player-number">
                        </div>  

                        <button type="submit" class="btn btn-primary">Cadastrar</button>

                    </form>  


                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection