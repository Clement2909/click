<!-- create.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle chaussure</title>
</head>
<body>
    <h1>Créer une nouvelle chaussure</h1>
    <!-- Formulaire pour créer une nouvelle chaussure -->
    <form action="/chaussures/create" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>
        <!-- Autres champs du formulaire pour créer une nouvelle chaussure -->
        <button type="submit">Créer</button>
    </form>
</body>
</html>

