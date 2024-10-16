{{-- resources/views/components/pacientes-table.blade.php --}}
<div class="table-responsive">
    <table class="table table-striped table-bordered mt-2">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Fecha de Consulta</th>
                <th>Dirección</th>
                <th>Motivo de Consulta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $item)
                <tr>
                    <td>{{ $item->codigo_paciente }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->edad }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->fecha }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->detallesconsulta }}</td>
                    <td class="action-buttons">
                        <a class="btn btn-primary btn-sm" href="/pacientes/edit/{{ $item->codigo_paciente }}" title="Modificar">
                            <i class="fas fa-edit"></i> Modificar
                        </a>
                        <button class="btn btn-danger btn-sm" url="/pacientes/destroy/{{ $item->codigo_paciente }}" onclick="destroy(this)" token="{{ csrf_token() }}" title="Eliminar">
                            <i class="fas fa-trash-alt"></i> Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
