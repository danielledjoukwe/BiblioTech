<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des produits</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Liste des produits</h1>

        <a href="create.html" class="btn btn-primary">
            Ajouter un produit
        </a>
    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Ordinateur HP</td>
                <td>Ordinateur portable HP</td>
                <td>350000 FCFA</td>
                <td>10</td>
                <td>
                    <a href="edit.html" class="btn btn-warning btn-sm">
                        Modifier
                    </a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Souris Logitech</td>
                <td>Souris sans fil</td>
                <td>15000 FCFA</td>
                <td>25</td>
                <td>
                    <a href="edit.html" class="btn btn-warning btn-sm">
                        Modifier
                    </a>
                </td>
            </tr>

        </tbody>

    </table>

</div>

</body>
</html>