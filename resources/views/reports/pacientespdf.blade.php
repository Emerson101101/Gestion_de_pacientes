<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pacientes Registrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f7fa;
            color: #333;
        }
        #container {
            max-width: 1000px;
            margin: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .header {
            margin-top:-8%;
            text-align: center;
            margin-bottom: 30px;
        }
        .header h5 {
            font-size: 2rem;
            font-weight: 700;
            color: #007bff; /* Azul primario */
        }
        p{
            margin-top:-7%;
        }
        .header p {
            color: #6c757d; /* Texto secundario */
            font-size: 1.1rem;
        }
        .table-responsive {
            margin-top:-6%;
            border-radius: 0.5rem;
            overflow: hidden; /* Para redondear las esquinas */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #dee2e6;
        }
        th {
            background-color: #007bff; /* Azul de encabezado */
            color: white; /* Texto blanco en encabezado */
            font-weight: 600;
        }
        tbody tr:hover {
            background-color: #f1f1f1; /* Color de fila al pasar el mouse */
        }
        tbody tr:nth-child(even) {
            background-color: #f9f9f9; /* Alternar color de filas */
        }
        tbody tr:nth-child(odd) {
            background-color: #fff; /* Alternar color de filas */
        }
    </style>
</head>
<body>
    <div id="container" class="container">
        <div class="header">
            <h5>Pacientes Registrados</h5>
            <p>Reporte de todos los pacientes registrados en el sistema.</p>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Teléfono</th>
                        <th>Fecha de Consulta</th>
                        <th>Dirección</th>
                        <th>Motivo de Consulta</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Listado de pacientes --}}
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->codigo_paciente }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->edad }}</td>
                            <td>{{ $item->telefono }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->direccion }}</td>
                            <td>{{ $item->detallesconsulta }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
