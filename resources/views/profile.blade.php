<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BiblioTech — Mon espace</title>
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
        <li class="nav-item"><a class="nav-link" href="index.html">Catalogue</a></li>
        <li class="nav-item"><a class="nav-link active" href="profile.html">Mon espace</a></li>
        <li class="nav-item"><a class="nav-link" href="admin.html">Administration</a></li>
      </ul>
      <span class="badge bg-light text-dark py-2 px-3">Camille D. — Membre</span>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="mb-4">
    <h1>Mon espace</h1>
    <p class="text-muted mb-0">Vos emprunts en cours et l'historique complet de vos lectures à la médiathèque.</p>
  </div>

  <h2 class="h5 mb-3">Emprunts en cours</h2>
  <div class="table-responsive shadow-sm mb-5">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr><th>Livre</th><th>Date d'emprunt</th><th>Retour prévu</th><th>Statut</th></tr>
      </thead>
      <tbody>
        <tr>
          <td><div class="fw-semibold">L'Étranger</div><div class="small text-muted">Albert Camus</div></td>
          <td>18 juil. 2026</td>
          <td>01 août 2026</td>
          <td><span class="badge bg-danger">En retard</span></td>
        </tr>
        <tr>
          <td><div class="fw-semibold">L'Arabe du futur</div><div class="small text-muted">Riad Sattouf</div></td>
          <td>25 juil. 2026</td>
          <td>08 août 2026</td>
          <td><span class="badge bg-success">Dans les temps</span></td>
        </tr>
      </tbody>
    </table>
  </div>

  <h2 class="h5 mb-3">Historique complet</h2>
  <div class="table-responsive shadow-sm">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-dark">
        <tr><th>Livre</th><th>Date d'emprunt</th><th>Retour prévu</th><th>Retour effectif</th><th>Statut</th></tr>
      </thead>
      <tbody>
        <tr>
          <td><div class="fw-semibold">L'Étranger</div><div class="small text-muted">Albert Camus</div></td>
          <td>18 juil. 2026</td><td>01 août 2026</td><td>—</td>
          <td><span class="badge bg-danger">En retard</span></td>
        </tr>
        <tr>
          <td><div class="fw-semibold">L'Arabe du futur</div><div class="small text-muted">Riad Sattouf</div></td>
          <td>25 juil. 2026</td><td>08 août 2026</td><td>—</td>
          <td><span class="badge bg-success">En cours</span></td>
        </tr>
        <tr>
          <td><div class="fw-semibold">Les Fleurs du mal</div><div class="small text-muted">Charles Baudelaire</div></td>
          <td>02 juin 2026</td><td>16 juin 2026</td><td>15 juin 2026</td>
          <td><span class="badge bg-secondary">Rendu</span></td>
        </tr>
        <tr>
          <td><div class="fw-semibold">La Peste</div><div class="small text-muted">Albert Camus</div></td>
          <td>10 mai 2026</td><td>24 mai 2026</td><td>24 mai 2026</td>
          <td><span class="badge bg-secondary">Rendu</span></td>
        </tr>
        <tr>
          <td><div class="fw-semibold">Les Misérables</div><div class="small text-muted">Victor Hugo</div></td>
          <td>02 avr. 2026</td><td>16 avr. 2026</td><td>20 avr. 2026</td>
          <td><span class="badge bg-secondary">Rendu (en retard)</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<footer class="text-center text-muted small py-4 border-top">BiblioTech — projet pédagogique Laravel · maquette Bootstrap 5, données fictives</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
