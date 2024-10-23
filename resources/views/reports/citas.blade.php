<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas Médicas Registradas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #fff; /* Fondo blanco para impresión */
            color: #333;
        }
        #container {
            max-width: 100%; /* Ajustar a todo el ancho */
            margin: auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h5 {
            font-size: 1.5rem; /* Tamaño de fuente adecuado */
            font-weight: bold;
            color: #007bff;
        }
        .header p {
            color: #6c757d;
            font-size: 1rem;
        }
        .table-responsive {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px; /* Reducir padding para más espacio */
            text-align: left;
            border: 1px solid #dee2e6;
            font-size: 0.9rem; /* Tamaño de fuente más pequeño */
        }
        th {
            background-color: #007bff; /* Azul de encabezado */
            color: white; /* Texto blanco en encabezado */
            font-weight: bold;
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9; /* Alternar color de filas */
        }
        td {
            word-wrap: break-word; /* Permitir saltos de línea */
            max-width: 150px; /* Limitar ancho para evitar desbordamientos */
        }
    </style>
</head>
<body>
    <div id="container">
        <div class="header">
            <h5>Citas Médicas Registradas</h5>
            <p>Reporte de todas las citas médicas registradas en el sistema.</p>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre del paciente</th>
                        <th>Médico</th>
                        <th>Especialidad</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Motivo</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Listado de citas médicas --}}
                    @foreach ($citas as $item)
                        <tr>
                            <td>{{ $item->codigo_cita }}</td>
                            <td>{{ $item->paciente }}</td>
                            <td>{{ $item->medico }}</td>
                            <td>{{ $item->especialidad }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->hora }}</td>
                            <td>{{ $item->motivo }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
