<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des chaussures</title>
</head>
<body>
    <h1>Liste des chaussures disponibles</h1>
    <ul>
    <?php foreach ($shoes as $shoe): ?>
        <li>
            <a href="/admin/shoes/details/<?php echo $shoe['id']; ?>">
                <?php echo $shoe['nom']; ?>
            </a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>
