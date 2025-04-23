@extends('layout')

@section('content')
    <div class="container mt-4 bg-dark text-light p-4 rounded">

        <div class="text-center mb-5">
            <h1 class="display-5">Bem-vindo</h1>
            <p class="lead">Sistema de Agendamento</p>
        </div>

        <nav class="nav justify-content-center">
            <a class="nav-link text-light" href="/">Início</a>
            <a class="nav-link text-light" href="/places/new">Novo espaço</a>
            <a class="nav-link text-light" href="/places">Meus espaços</a>
            <a class="nav-link text-light" href="#">Novo agendamento</a>
            <a class="nav-link text-light" href="#">Meus agendamentos</a>
        </nav>

    </div>
@endsection
