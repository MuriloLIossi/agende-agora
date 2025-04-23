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
                @forelse ($places as $place)
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
                @empty 
                    <tr>
                        <td colspan="5" class="text-center">
                            <h3 class="mt-3"> Nenhum espaço cadastrado</h3>
                            <p class="text-light">Para cadastrar, <a href="/places/new">clique aqui</a></p>
                        </td>
                    </tr> 
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
