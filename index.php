<?php

$productos = [
    ["nombre" => "Laptop",  "precio" => 2500, "stock" => 5],
    ["nombre" => "Mouse",   "precio" => 50,   "stock" => 10],
    ["nombre" => "Teclado", "precio" => 120,  "stock" => 0],
    ["nombre" => "Monitor", "precio" => 800,  "stock" => 3]
];

$valorInventario = 0;

foreach ($productos as $prod) {
    if ($prod["stock"] > 0) {
        $valorInventario += $prod["precio"] * $prod["stock"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálago de productos</title>
</head>
<body>
    <h1>Catálago de productos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo htmlspecialchars($producto["nombre"]) ?></td>
                    <td>S/ <?php echo number_format($producto["precio"], 2) ?></td>
                    <td><?php echo $producto["stock"] ?></td>
                    <td><?php echo $producto["stock"] > 0 ? "Disponible" : "Agotado" ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><strong>Valor total del inventario disponible:</strong> S/ <?php echo number_format($valorInventario, 2) ?></p>
</body>
</html>