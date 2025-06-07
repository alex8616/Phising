<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Credenciales</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
<div class="container mt-4">
    <h1>Lista de Credenciales</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>ID Gestión</th>
                <th>ID Periodo</th>
                <th>Periodo</th>
                <th>Creado</th>
                <th>Actualizado</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($credenciales as $credencial)
                <tr>
                    <td>{{ $credencial->id }}</td>
                    <td>{{ $credencial->usuario }}</td>
                    <td>{{ $credencial->clave }}</td>
                    <td>{{ $credencial->id_gestion }}</td>
                    <td>{{ $credencial->id_periodo }}</td>
                    <td>{{ $credencial->periodo }}</td>
                    <td>{{ $credencial->created_at }}</td>
                    <td>{{ $credencial->updated_at }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center">No hay credenciales registradas</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
