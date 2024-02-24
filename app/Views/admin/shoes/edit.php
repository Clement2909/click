<!-- edit.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la chaussure</title>
</head>
<body>
    <h1>Modifier la chaussure</h1>
    <!-- Formulaire pour modifier une chaussure -->
    <form action="/chaussures/edit/<?= $chaussure['id'] ?>" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?= $chaussure['nom'] ?>" required><br>
        <!-- Autres champs du formulaire pour modifier la chaussure -->
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
