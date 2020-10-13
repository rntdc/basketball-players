@extends('layouts.app')

@section('content')
<!-- after login -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">

            <div class="card">
                <div class="card-header">
                    <a href="#" data-toggle="modal" data-target="#register-modal">Cadastrar</a>
                </div>

                <div class="card-body text-center" id="list-players">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Altura</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $players as $p )
                                <tr>
                                    <th scope="row">{{ $p->number }}</th>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->height }}</td>
                                    <td>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                        </svg>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>    
    <!-- player register modal -->
    <div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Novo Jogador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
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
                    
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
