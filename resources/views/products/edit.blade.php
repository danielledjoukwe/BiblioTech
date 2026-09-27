<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un produit</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1 class="mb-4">Modifier un produit</h1>

    <form>

        <div class="mb-3">
            <label for="nom" class="form-label">
                Nom du produit
            </label>

            <input type="text"
                   id="nom"
                   name="nom"
                   class="form-control"
                   value="Ordinateur HP">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">
                Description
            </label>

            <textarea id="description"
                      name="description"
                      class="form-control"
                      rows="4">Ordinateur portable HP</textarea>
        </div>

        <div class="mb-3">
            <label for="prix" class="form-label">
                Prix
            </label>

            <input type="number"
                   id="prix"
                   name="prix"
                   class="form-control"
                   value="350000">
        </div>

        <div class="mb-3">
            <label for="quantite" class="form-label">
                Quantité
            </label>

            <input type="number"
                   id="quantite"
                   name="quantite"
                   class="form-control"
                   value="10">
        </div>

        <button type="submit" class="btn btn-primary">
            Modifier
        </button>

        <a href="index.html" class="btn btn-secondary">
            Annuler
        </a>

    </form>

</div>

</body>
</html>