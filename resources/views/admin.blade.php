<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BiblioTech — Administration</title>
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
        <li class="nav-item"><a class="nav-link active" href="admin.html">Administration</a></li>
      </ul>
      <span class="badge bg-light text-dark py-2 px-3">M. Rossi — Bibliothécaire</span>
    </div>
  </div>
</nav>

<div class="container py-5">
  <div class="mb-4">
    <h1>Administration</h1>
    <p class="text-muted mb-0">Gestion du catalogue, des membres et des emprunts. Accès réservé au rôle administrateur.</p>
  </div>

  <div class="row g-3 mb-4">
    <div class="col-6 col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-primary">
        <div class="card-body">
          <div class="fs-3 fw-bold">248</div>
          <div class="text-muted small text-uppercase">Livres au catalogue</div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-primary">
        <div class="card-body">
          <div class="fs-3 fw-bold">312</div>
          <div class="text-muted small text-uppercase">Membres inscrits</div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-primary">
        <div class="card-body">
          <div class="fs-3 fw-bold">37</div>
          <div class="text-muted small text-uppercase">Emprunts en cours</div>
        </div>
      </div>
    </div>
    <div class="col-6 col-md-3">
      <div class="card shadow-sm h-100 border-start border-4 border-danger">
        <div class="card-body">
          <div class="fs-3 fw-bold text-danger">5</div>
          <div class="text-muted small text-uppercase">Emprunts en retard</div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-4">
    <div class="col-lg-3">
      <div class="list-group sticky-top" style="top:1rem;">
        <div class="list-group-item disabled small text-uppercase text-muted">Catalogue</div>
        <button class="list-group-item list-group-item-action active" data-bs-toggle="pill" data-bs-target="#p-livres">📕 Livres</button>
        <button class="list-group-item list-group-item-action" data-bs-toggle="pill" data-bs-target="#p-auteurs">🖋 Auteurs &amp; catégories</button>
        <div class="list-group-item disabled small text-uppercase text-muted">Communauté</div>
        <button class="list-group-item list-group-item-action" data-bs-toggle="pill" data-bs-target="#p-membres">👥 Membres</button>
        <div class="list-group-item disabled small text-uppercase text-muted">Circulation</div>
        <button class="list-group-item list-group-item-action" data-bs-toggle="pill" data-bs-target="#p-emprunts">📖 Emprunts en cours</button>
        <button class="list-group-item list-group-item-action" data-bs-toggle="pill" data-bs-target="#p-retards">⏰ Retards</button>
      </div>
    </div>

    <div class="col-lg-9">
      <div class="tab-content">

        <!-- LIVRES -->
        <div class="tab-pane fade show active" id="p-livres">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0">Livres</h2>
            <button class="btn btn-success btn-sm" id='livreButton'>+ Ajouter un livre</button>
          </div>
          <div class="table-responsive shadow-sm">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-dark"><tr><th>Titre</th><th>Auteur</th><th>Catégorie</th><th>Année</th><th>Statut</th><th></th></tr></thead>
              <tbody>
                <tr>
                  <td class="fw-semibold">Les Misérables</td><td>Victor Hugo</td><td>Roman</td><td>1862</td>
                  <td><span class="badge bg-success">Disponible</span></td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">L'Étranger</td><td>Albert Camus</td><td>Roman</td><td>1942</td>
                  <td><span class="badge bg-danger">Emprunté</span></td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Les Fleurs du mal</td><td>Charles Baudelaire</td><td>Poésie</td><td>1857</td>
                  <td><span class="badge bg-success">Disponible</span></td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">L'Arabe du futur</td><td>Riad Sattouf</td><td>Bande dessinée</td><td>2014</td>
                  <td><span class="badge bg-danger">Emprunté</span></td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- AUTEURS & CATEGORIES -->
        <div class="tab-pane fade" id="p-auteurs">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0">Auteurs</h2>
            <button class="btn btn-success btn-sm" id="authorButton">+ Ajouter un auteur</button>
          </div>
          <div class="table-responsive shadow-sm mb-4">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-dark"><tr><th>Nom</th><th>Nationalité</th><th>Livres au catalogue</th><th></th></tr></thead>
              <tbody>
                <tr><td class="fw-semibold">Victor Hugo</td><td>Française</td><td>2</td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td></tr>
                <tr><td class="fw-semibold">Albert Camus</td><td>Française</td><td>2</td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td></tr>
                <tr><td class="fw-semibold">Ursula K. Le Guin</td><td>Américaine</td><td>2</td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td></tr>
              </tbody>
            </table>
          </div>

          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0">Catégories</h2>
            <button class="btn btn-success btn-sm" id="categoryButton">+ Ajouter une catégorie</button>
          </div>
          <div class="table-responsive shadow-sm">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-dark"><tr><th>Catégorie</th><th>Livres associés</th><th></th></tr></thead>
              <tbody>
                <tr><td class="fw-semibold">Roman</td><td>4</td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td></tr>
                <tr><td class="fw-semibold">Science-fiction</td><td>2</td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td></tr>
                <tr><td class="fw-semibold">Poésie</td><td>1</td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td></tr>
                <tr><td class="fw-semibold">Bande dessinée</td><td>1</td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Modifier</button> <button class="btn btn-outline-danger btn-sm">Supprimer</button></td></tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- MEMBRES -->
        <div class="tab-pane fade" id="p-membres">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0">Membres</h2>
            <span class="text-muted small">312 comptes inscrits</span>
          </div>
          <div class="table-responsive shadow-sm">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-dark"><tr><th>Nom</th><th>E-mail</th><th>Emprunts en cours</th><th>Statut du compte</th><th></th></tr></thead>
              <tbody>
                <tr>
                  <td class="fw-semibold">Camille Dubois</td><td>camille.d@exemple.fr</td><td>2</td>
                  <td><span class="badge bg-success">Actif</span></td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Voir</button> <button class="btn btn-outline-danger btn-sm">Désactiver</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Nathan Moreau</td><td>n.moreau@exemple.fr</td><td>1</td>
                  <td><span class="badge bg-success">Actif</span></td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Voir</button> <button class="btn btn-outline-danger btn-sm">Désactiver</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Léa Fontaine</td><td>lea.fontaine@exemple.fr</td><td>0</td>
                  <td><span class="badge bg-secondary">Désactivé</span></td>
                  <td class="text-nowrap"><button class="btn btn-outline-secondary btn-sm">Voir</button> <button class="btn btn-success btn-sm">Réactiver</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- EMPRUNTS EN COURS -->
        <div class="tab-pane fade" id="p-emprunts">
          <h2 class="h4 mb-3">Emprunts en cours</h2>
          <div class="table-responsive shadow-sm">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-dark"><tr><th>Livre</th><th>Membre</th><th>Emprunté le</th><th>Retour prévu</th><th>Statut</th><th></th></tr></thead>
              <tbody>
                <tr>
                  <td class="fw-semibold">L'Étranger</td><td>Camille Dubois</td><td>18 juil. 2026</td><td>01 août 2026</td>
                  <td><span class="badge bg-danger">En retard</span></td>
                  <td><button class="btn btn-success btn-sm">Enregistrer le retour</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">L'Arabe du futur</td><td>Camille Dubois</td><td>25 juil. 2026</td><td>08 août 2026</td>
                  <td><span class="badge bg-success">Dans les temps</span></td>
                  <td><button class="btn btn-success btn-sm">Enregistrer le retour</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">La Main gauche de la nuit</td><td>Nathan Moreau</td><td>29 juil. 2026</td><td>12 août 2026</td>
                  <td><span class="badge bg-success">Dans les temps</span></td>
                  <td><button class="btn btn-success btn-sm">Enregistrer le retour</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- RETARDS -->
        <div class="tab-pane fade" id="p-retards">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="h4 mb-0">Emprunts en retard</h2>
            <span class="text-muted small">Retour prévu dépassé, sans retour enregistré</span>
          </div>
          <div class="table-responsive shadow-sm">
            <table class="table table-hover align-middle mb-0">
              <thead class="table-dark"><tr><th>Livre</th><th>Membre</th><th>Retour prévu</th><th>Jours de retard</th><th></th></tr></thead>
              <tbody>
                <tr>
                  <td class="fw-semibold">L'Étranger</td><td>Camille Dubois</td><td>01 août 2026</td>
                  <td><span class="badge bg-danger">0 j</span></td>
                  <td><button class="btn btn-success btn-sm">Enregistrer le retour</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">La Peste</td><td>Nathan Moreau</td><td>22 juil. 2026</td>
                  <td><span class="badge bg-danger">10 j</span></td>
                  <td><button class="btn btn-success btn-sm">Enregistrer le retour</button></td>
                </tr>
                <tr>
                  <td class="fw-semibold">Notre-Dame de Paris</td><td>Léa Fontaine</td><td>15 juil. 2026</td>
                  <td><span class="badge bg-danger">17 j</span></td>
                  <td><button class="btn btn-success btn-sm">Enregistrer le retour</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nouvelle catégorie</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ url('/addCategory') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nom:</label>
            <input type="text" class="form-control" id="recipient-name" name="nom">
            @error('nom')
            <p class="text-danger" >
              {{ $message }}
            </p>
            @enderror
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea class="form-control" id="message-text" name="description"></textarea>
            @error('description')
            <p class="text-danger" >
              {{ $message }}
            </p>
            @enderror
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Ajouter</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
<div class="modal fade" id="authorModal" tabindex="-1" aria-labelledby="authorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="authorModalLabel">
                    Nouvel auteur
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
     <form>
              <div class="mb-3">
                <label class="form-label">Nom de l'auteur</label>
                  <input type="text" class="form-control" placeholder="Victor Hugo">
              </div>
              <div class="mb-3">
                  <label class="form-label">Nationalité</label>
                  <input type="text" class="form-control" placeholder="Française">
              </div>
      </form>
      </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button class="btn btn-primary"> Ajouter</button>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" id="livreModal" tabindex="-1" aria-labelledby="livreModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="livreModalLabel">
                    Nouveau livre
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
     <form action="{{ url('/addLivre') }}" method="POST">
               @csrf
              <div class="mb-3">
                <label class="form-label">Titre du livre</label>
                  <input type="text" class="form-control" name>
              </div>
              <div class="mb-3">
                  <label class="form-label">Description</label>
                  <input type="text" class="form-control">
              </div>
              <div class="mb-3">
                  <label class="form-label">annee_publication</label>
                  <input type="text" class="form-control">
              </div>
              <div class="mb-3">
                  <label class="form-label">statut</label>
                  <input type="text" class="form-control">
                  <div class="mb-3">
                  <label class="form-label">image</label>
                  <input class="form-control">
              </div> 
              </div>
             </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button class="btn btn-primary" type='submit'> Ajouter</button>
            </div>

        </div>
      </form>
    
    </div>
</div> 


<footer class="text-center text-muted small py-4 border-top">BiblioTech — projet pédagogique Laravel · maquette Bootstrap 5, données fictives</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  const catgoryButton = document.getElementById('categoryButton');
  categoryButton.addEventListener('click' , function(){
    const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
    modal.show();
  })

  const authorButton = document.getElementById('authorButton');
  authorButton.addEventListener('click', function () {
    const modal = new bootstrap.Modal(document.getElementById('authorModal')
    );
  modal.show();
});


const livreButton = document.getElementById('livreButton');
livreButton.addEventListener('click', function () {
    const modal = new bootstrap.Modal(
        document.getElementById('livreModal')
    );
    modal.show();
});

</script> 
</body>
</html>
