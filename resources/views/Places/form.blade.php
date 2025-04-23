@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="card bg-dark text-light shadow">
            <div class="card-header bg-primary text-white text-center">
                <h1 class="fw-bold">Novo espaço 🏙</h1>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome do espaço</label>
                        <input class="form-control bg-dark text-light border-secondary" type="text" name="name" id="name">
                    </div>

                    <div class="mb-3">
                        <label for="capacity" class="form-label">Capacidade</label>
                        <input class="form-control bg-dark text-light border-secondary" type="number" min="0" name="capacity" id="capacity">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label">Descrição</label>
                        <textarea name="Description" id="description" class="form-control bg-dark text-light border-secondary" rows="3"></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <button type="reset" class="btn btn-outline-light">Limpar</button>
                        <button type="submit" class="btn btn-primary" onclick="mostrarAviso()">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function mostrarAviso() {
            alert("Espaço salvo com sucesso!");
        }
    </script>
@endsection
