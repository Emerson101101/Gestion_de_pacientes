<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas Médicas Registradas</title>
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
            color: #6c757d; /* Texto secundario */
            font-size: 1rem;
        }
        .table-responsive {
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Mantener el colapso de bordes */
            margin-top: 20px;
        }
        th, td {
            padding: 10px; /* Ajustar el padding para más espacio */
            text-align: left;
            border: 1px solid #dee2e6;
            font-size: 0.9rem; /* Tamaño de fuente adecuado */
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
            <h5>Recetas Médicas Registradas</h5>
            <p>Reporte de todas las recetas médicas registradas en el sistema.</p>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Medicamento</th>
                        <th>Horario</th>
                        <th>Fecha de Inicio</th>
                        <th>Días</th>
                        <th>Dosis</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Listado de recetas médicas --}}
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->codigo_receta }}</td>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->horario }}</td>
                            <td>{{ $item->fecha }}</td>
                            <td>{{ $item->dias }}</td>
                            <td>{{ $item->dosis }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
