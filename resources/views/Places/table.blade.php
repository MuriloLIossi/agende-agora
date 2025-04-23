@extends('layout')

@section('content')
    <div class="container mt-4">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Capacidade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                    <tr>
                        <td>{{$place->id}}</td>
                        <td>{{$place->name}}</td>
                        <td>{{$place->Description}}</td>
                        <td>{{$place->capacity}}</td>
                        <td>    
                            <button class="btn btn-secondary">
                                Editar
                            </button>
                            <button class="btn btn-danger">
                                Excluir
                            </button>
                        </td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
@endsection
