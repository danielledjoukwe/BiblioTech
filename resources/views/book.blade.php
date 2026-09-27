<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BiblioTech — Les Misérables</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
</div>
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

<div class="container py-5" style="max-width:960px;">
  <p><a href="index.html" class="text-decoration-none">&larr; Retour au catalogue</a></p>

  <div class="row g-5">
    <div class="col-md-4">
      <div class="bg-secondary bg-gradient rounded d-flex align-items-center justify-content-center text-white text-center p-4 shadow-sm" style="aspect-ratio:3/4;">
        Les Misérables
      </div>
    </div>
    <div class="col-md-8">
      <span class="badge bg-light text-dark border">Roman</span>
      <h1 class="mt-2">Les Misérables</h1>
      <p class="text-muted">L'histoire de Jean Valjean, ancien bagnard en quête de rédemption, sur fond de misère sociale et de soulèvement populaire dans le Paris du XIXe siècle.</p>

      <div class="row border-top border-bottom py-3 my-3 g-3">
        <div class="col-6 col-md-3">
          <div class="text-muted small text-uppercase">Auteur</div>
          <div class="fs-5">Victor Hugo</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="text-muted small text-uppercase">Année</div>
          <div class="fs-5">1862</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="text-muted small text-uppercase">Catégorie</div>
          <div class="fs-5">Roman</div>
        </div>
        <div class="col-6 col-md-3">
          <div class="text-muted small text-uppercase">Statut</div>
          <span class="badge bg-success mt-1">Disponible</span>
        </div>
      </div>

      <div class="d-flex align-items-center gap-3 flex-wrap">
        <button class="btn btn-success">Emprunter ce livre</button>
        <span class="text-muted small">Retour prévu 14 jours après l'emprunt</span>
      </div>
      <p class="text-muted small mt-2">Connectez-vous en tant que membre pour emprunter un ouvrage. <a href="auth.html">Se connecter &rarr;</a></p>

      <div class="mt-5 pt-4 border-top">
        <p class="text-muted text-uppercase small">Plus de Victor Hugo</p>
        <div class="row row-cols-2 row-cols-md-4 g-3 mt-1">
          <div class="col">
            <a href="book.html" class="text-decoration-none text-dark">
              <div class="card shadow-sm">
                <div class="card-img-top bg-secondary bg-gradient d-flex align-items-center justify-content-center text-white text-center p-2 small" style="aspect-ratio:3/4;">
                  Notre-Dame de Paris
                </div>
                <div class="card-body p-2">
                  <div class="small fw-semibold">Notre-Dame de Paris</div>
                  <span class="badge bg-success mt-1">Disponible</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="text-center text-muted small py-4 border-top">BiblioTech — projet pédagogique Laravel · maquette Bootstrap 5, données fictives</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
