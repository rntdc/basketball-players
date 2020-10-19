@extends('layouts.app')

@section('content')
<!-- after login -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12">
            
            <div class="card">
                <div class="card-header">
                <a href="{{ url('home/form') }}">Cadastrar</a>
                </div>
    
                <div class="card-body text-center" id="list-players">
                    @if($players->count()>0)
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
                                    <form action="home/delete/{{ $p->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                        <td>
                                            <a href="home/{{ $p->id }}/edit"><img src="{{ url('img/pencil-fill.svg') }}" alt="" width="16" height="16"></a>                                       
                                            <button class="delete" type="submit"><img src="{{ url('img/trash-fill.svg') }}" alt="" width="16" height="16"></button>                                                                  
                                        </td>
                                    </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h4 class="p-4"><a href="{{ url('home/form') }}">Cadastre novos jogadores!</a><h4>
                    @endif
                    
                </div>
            </div>            
            

            
        </div>
    </div>    
</div>
@endsection
