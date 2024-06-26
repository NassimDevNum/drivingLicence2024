
<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?= URL ?>accueil">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Mon profil</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="<?= URL ?>public\Assets\images\avatar.png" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3"><?= strtoupper($utilisateur['NOM_CLIENT']).' '.$utilisateur['PRENOM_CLIENT']?></h5>
            <div class="d-flex justify-content-center mb-2">
              <button id="btnSupCompte" class="btn btn-danger">Supprimer mon compte</button>
            </div>
            <div id="suppressionCompte" class="d-none m-2">
              <div class="alert alert-danger">
                Veuillez confirmer la suppression du compte. 
                <br/>
                <a href="<?= URL ?>compte/suppressionCompte" class="btn btn-danger">Je souhaite supprimer mon compte définitivement</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Nom Complet</p>
        </div>
        <div class="col-sm-6">
          <p class="text-muted mb-0"><?= strtoupper($utilisateur['NOM_CLIENT']).' '.$utilisateur['PRENOM_CLIENT']?></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Email</p>
        </div>
        <div class="col-sm-6">
          <p id='mail' class="text-muted mb-0"><?= $utilisateur['MAIL'] ?>
          <button class="btn btn-transparent" id="btnModifMail"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
          </button>
          </p>
        </div>
        <div id="modificationMail" class= "col-sm-3 d-none">
          <form method="POST" action="<?= URL; ?>compte/validation_modificationMail">
            <div class="row">
              <label for="mail" class="col-2 col-form-label">Mail : </label>
              <div class="col-8">
                  <input type="mail" class="form-control" name="MAIL" value="<?= $utilisateur['MAIL']?>"/>
              </div>
              <div class="col-2">
                  <button class="btn btn-success" id="btnValidModifMail">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
                  <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
                  <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
                  </svg>
                  </button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <hr>


      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Téléphone</p>
        </div>
        <div class="col-sm-6">
          <p class="text-muted mb-0"><?= $utilisateur['TEL'] ?></p>
        </div>
        <div class="col-sm-3">
          <a href="<?= URL; ?>compte/modificationTel" class="btn btn-transparent" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Mot de passe</p>
        </div>
        <div class="col-sm-6">
          <p class="text-muted mb-0">********</p>
        </div>
        <div class="col-sm-3">
          <a href="<?= URL; ?>compte/modificationPassword" class="btn btn-transparent" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg></a>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Adresse</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"><?= $utilisateur['ADRESSE_CLIENT'] ?></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Date de naissance</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"><?= $utilisateur['DATE_DE_NAISSANCE'] ?></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-sm-3">
          <p class="mb-0">Date d'inscription</p>
        </div>
        <div class="col-sm-9">
          <p class="text-muted mb-0"><?= $utilisateur['DATE_INSCRIPTION'] ?></p>
        </div>
      </div>
    </div>
  </div>
</div>



      </div>
    </div>
  </div>

<!-- views/Utilisateur/profil.view.php -->

<h1>Mon planning</h1>

<table>
    <thead>
        <tr>
            <th>Nom de la leçon</th>
            <th>Nom du client</th>
            <th>Nom du moniteur</th>
            <th>Modèle</th>
            <th>Date et heure de début</th>
            <th>Date et heure de fin</th>
            <th>Temps restant</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($planning as $rdv): ?>
            <tr>
                <td><?= htmlspecialchars($rdv['NOM_LECON']) ?></td>
                <td><?= htmlspecialchars($rdv['NOM_CLIENT']) ?></td>
                <td><?= htmlspecialchars($rdv['NOM_MONITEUR']) ?></td>
                <td><?= htmlspecialchars($rdv['NOM_MODELE']) ?></td>
                <td><?= htmlspecialchars($rdv['DATE_HEURE_DEBUT']) ?></td>
                <td><?= htmlspecialchars($rdv['DATE_HEURE_FIN']) ?></td><td>
    <?= htmlspecialchars($rdv['Heures restantes']) ?> heures, 
    <?= htmlspecialchars($rdv['Minutes restantes']) ?> minutes
</td>
<td>
<form method="POST" action="compte/supprimerRdv<?= $rdv['ID'] ?>
    <button type="submit">Supprimer</button>
</form>
            </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


</section>

