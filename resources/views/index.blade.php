<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BiblioTech — Catalogue</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.html">BiblioTech</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a class="nav-link active" href="index.html">Catalogue</a></li>
        <li class="nav-item"><a class="nav-link" href="profile.html">Mon espace</a></li>
        <li class="nav-item"><a class="nav-link" href="admin.html">Administration</a></li>
      </ul>
      <a href="auth.html" class="btn btn-outline-light btn-sm">Se connecter</a>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="mb-4">
    <h1>Le catalogue</h1>
    <p class="text-muted">Parcourez les ouvrages de la médiathèque, filtrez par catégorie ou par auteur, et consultez la disponibilité en temps réel.</p>
  </div>

  <form class="row g-2 mb-4">
    <div class="col-lg-4 col-md-6">
      <input type="search" class="form-control" placeholder="Rechercher un titre… (ex. Les Fleurs du mal)">
    </div>
    <div class="col-lg-2 col-md-3 col-6">
      <select class="form-select">
        <option>Toutes catégories</option>
        <option>Roman</option>
        <option>Essai</option>
        <option>Bande dessinée</option>
        <option>Science-fiction</option>
        <option>Poésie</option>
      </select>
    </div>
    <div class="col-lg-2 col-md-3 col-6">
      <select class="form-select">
        <option>Tous auteurs</option>
        <option>Victor Hugo</option>
        <option>Albert Camus</option>
        <option>Ursula K. Le Guin</option>
        <option>Charles Baudelaire</option>
        <option>Riad Sattouf</option>
      </select>
    </div>
    <div class="col-lg-2 col-md-4 col-6">
      <select class="form-select">
        <option>Trier : titre (A→Z)</option>
        <option>Trier : disponibilité</option>
        <option>Trier : année</option>
      </select>
    </div>
    <div class="col-lg-2 col-md-2 col-6">
      <button type="button" class="btn btn-outline-secondary w-100">Filtrer</button>
    </div>
  </form>

  <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4">

    <div class="col">
      <a href="book.html" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-3" style="aspect-ratio:3/4;">
            Les Misérables
          </div>
          <div class="card-body">
            <span class="badge bg-light text-dark border mb-1">Roman</span>
            <h3 class="h6 mb-1">Les Misérables</h3>
            <p class="small text-muted mb-2">Victor Hugo — 1862</p>
            <span class="badge bg-success">Disponible</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="book.html" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-3" style="aspect-ratio:3/4;">
            L'Étranger
          </div>
          <div class="card-body">
            <span class="badge bg-light text-dark border mb-1">Roman</span>
            <h3 class="h6 mb-1">L'Étranger</h3>
            <p class="small text-muted mb-2">Albert Camus — 1942</p>
            <span class="badge bg-danger">Emprunté</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="book.html" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-3" style="aspect-ratio:3/4;">
            La Main gauche de la nuit
          </div>
          <div class="card-body">
            <span class="badge bg-light text-dark border mb-1">Science-fiction</span>
            <h3 class="h6 mb-1">La Main gauche de la nuit</h3>
            <p class="small text-muted mb-2">Ursula K. Le Guin — 1969</p>
            <span class="badge bg-success">Disponible</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="book.html" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-3" style="aspect-ratio:3/4;">
            Les Fleurs du mal
          </div>
          <div class="card-body">
            <span class="badge bg-light text-dark border mb-1">Poésie</span>
            <h3 class="h6 mb-1">Les Fleurs du mal</h3>
            <p class="small text-muted mb-2">Charles Baudelaire — 1857</p>
            <span class="badge bg-success">Disponible</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="book.html" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-3" style="aspect-ratio:3/4;">
            L'Arabe du futur
          </div>
          <div class="card-body">
            <span class="badge bg-light text-dark border mb-1">Bande dessinée</span>
            <h3 class="h6 mb-1">L'Arabe du futur</h3>
            <p class="small text-muted mb-2">Riad Sattouf — 2014</p>
            <span class="badge bg-danger">Emprunté</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="book.html" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-3" style="aspect-ratio:3/4;">
            La Peste
          </div>
          <div class="card-body">
            <span class="badge bg-light text-dark border mb-1">Roman</span>
            <h3 class="h6 mb-1">La Peste</h3>
            <p class="small text-muted mb-2">Albert Camus — 1947</p>
            <span class="badge bg-success">Disponible</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="book.html" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-3" style="aspect-ratio:3/4;">
            Notre-Dame de Paris
          </div>
          <div class="card-body">
            <span class="badge bg-light text-dark border mb-1">Roman</span>
            <h3 class="h6 mb-1">Notre-Dame de Paris</h3>
            <p class="small text-muted mb-2">Victor Hugo — 1831</p>
            <span class="badge bg-success">Disponible</span>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="book.html" class="text-decoration-none text-dark">
        <div class="card h-100 shadow-sm">
          <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-3" style="aspect-ratio:3/4;">
            Les Dépossédés
          </div>
          <div class="card-body">
            <span class="badge bg-light text-dark border mb-1">Science-fiction</span>
            <h3 class="h6 mb-1">Les Dépossédés</h3>
            <p class="small text-muted mb-2">Ursula K. Le Guin — 1974</p>
            <span class="badge bg-success">Disponible</span>
          </div>
        </div>
      </a>
    </div>

  </div>
</div>

<footer class="text-center text-muted small py-4 border-top">BiblioTech — projet pédagogique Laravel · maquette Bootstrap 5, données fictives</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
