<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva categoria</title>
</head>
<body>
    <h1>Categoria: {{ $category->name }},</h1>

    <p>Estado: {{ $category->status }}.</p>

    <p>Descripcion: </p>
    <p>{{ $category->description }}</p>
</body>
</html>
