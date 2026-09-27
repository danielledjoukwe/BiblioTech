<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BiblioTech — Connexion</title>
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
        <li class="nav-item"><a class="nav-link" href="profile.html">Mon espace</a></li>
        <li class="nav-item"><a class="nav-link" href="admin.html">Administration</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container py-5" style="max-width:460px;">
  <h1 class="text-center mb-4">Bienvenue</h1>

  <div class="card shadow-sm">
    <div class="card-body p-4">
      <ul class="nav nav-tabs mb-4" id="authTab" role="tablist">
        <li class="nav-item flex-fill text-center" role="presentation">
          <button class="nav-link active w-100" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-pane" type="button" role="tab">Connexion</button>
        </li>
        <li class="nav-item flex-fill text-center" role="presentation">
          <button class="nav-link w-100" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-pane" type="button" role="tab">Inscription</button>
        </li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane fade show active" id="login-pane" role="tabpanel">
          <form>
            <div class="mb-3">
              <label class="form-label">Adresse e-mail</label>
              <input type="email" class="form-control" placeholder="vous@exemple.fr">
            </div>
            <div class="mb-3">
              <label class="form-label">Mot de passe</label>
              <input type="password" class="form-control" placeholder="••••••••">
            </div>
            <a href="profile.html" class="btn btn-dark w-100">Se connecter</a>
            <p class="text-muted small text-center mt-3 mb-0">Pas encore de compte ? <a href="#" onclick="document.getElementById('register-tab').click(); return false;">Inscrivez-vous</a></p>
          </form>
        </div>

        <div class="tab-pane fade" id="register-pane" role="tabpanel">
          <form>
            <div class="mb-3">
              <label class="form-label">Nom complet</label>
              <input type="text" class="form-control" placeholder="Prénom Nom">
            </div>
            <div class="mb-3">
              <label class="form-label">Adresse e-mail</label>
              <input type="email" class="form-control" placeholder="vous@exemple.fr">
            </div>
            <div class="mb-3">
              <label class="form-label">Mot de passe</label>
              <input type="password" class="form-control" placeholder="8 caractères minimum">
            </div>
            <div class="mb-3">
              <label class="form-label">Confirmer le mot de passe</label>
              <input type="password" class="form-control" placeholder="••••••••">
            </div>
            <a href="profile.html" class="btn btn-dark w-100">Créer mon compte</a>
            <p class="text-muted small text-center mt-3 mb-0">Le compte est créé avec le rôle « Membre ».</p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="text-center text-muted small py-4 border-top">BiblioTech — projet pédagogique Laravel · maquette Bootstrap 5, données fictives</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
