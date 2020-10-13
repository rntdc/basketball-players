@extends('layouts.app')

@section('content')
<!-- after login -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="#">Cadastrar</a>
                </div>

                <div class="card-body">
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
                            <tr>
                                <th scope="row">14</th>
                                <td>Tyler</td>
                                <td>1.96</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>Rondo</td>
                                <td>1.85</td>
                                <td>Action</td>
                            </tr>
                            <tr>
                                <th scope="row">22</th>
                                <td>Butler</td>
                                <td>2.01</td>
                                <td>Action</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
