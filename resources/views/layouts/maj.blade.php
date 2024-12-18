<!DOCTYPE html>
<html>
<head>
    <title>Projet Impots</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        #navbarCollapse {
            margin-left: 850px;
        }
    </style>
</head>
    
    <body class="d-flex align-items-center py-4 bg-body-tertiary">
        <!--nav deb -->
      <div class="bot">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Procédure de demande d'immatriculation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Se connecter</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
      </div>
        <!--nav fin-->
        
      <div class="container">
        <main>
          <div class="py-5 text-center">
            <h2>Espace Contribuable</h2>
            <p class="lead">Veuillez fournir les renseignements suivants:</p>
          </div>
      
          <div class="row g-5">
            <!--tess-->
            <div class="col-md-5 col-lg-4 order-md-last">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">Votre type</span>
                <span class="badge bg-primary rounded-pill">2</span>
              </h4>
              <div>
                <!--test Type-->
                        <div class="container" data-aos="fade-up">
                          <div class="row">
                            <div  data-aos="fade-up" data-aos-delay="100">
                              <div class="card mb-5 mb-lg-0">
                                <div class="card-body">
                                  <h5 class="card-title text-muted text-uppercase text-center">Détails spécifiques des individus et les entités morales.</h5>
                                  <div class="text-center">
                                    <button type="button" class="w-100 btn btn-link btn-lg" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal" data-ticket-type="standard-access">Personne physique</button>
                                  </div>
                                  <div class="text-center">
                                    <button type="button" class="w-100 btn btn-link btn-lg" data-bs-toggle="modal" data-bs-target="#buy-ticket-modal2" data-ticket-type="standard-access">Personne morale</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                  
                        <!-- type physique -->
                        <div id="buy-ticket-modal" class="modal fade">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Personne physique</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form class="needs-validation" novalidate>
                                    <div class="row g-3">
                                        <div class="col-md-5">
                                            <label for="country" class="form-label">Situation Matrimoniale</label>
                                            <select class="form-select" id="country" required>
                                              <option>Marié(e)</option>
                                              <option>Celibataire</option>
                                              <option>Divorce(e)</option>
                                              <option>Veuf/Veuve</option>
                                              <option>Inconnu(e)</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Veuillez sélectionner un pays valide.
                                            </div>
                                          </div>
                                          <div class="my-3">
                                            <label for="country" class="form-label">Sexe</label>
                                            <div class="form-check">
                                              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" required>
                                              <label class="form-check-label" for="credit">Feminin</label>
                                            </div>
                                            <div class="form-check">
                                              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                              <label class="form-check-label" for="debit">Masculin</label>
                                            </div>
                                          </div>
                                          <div style="display: inline-block">
                                            <button type="button" id="afficherMasquerFormulaire" class="w-100 btn btn-success btn-lg">Malagasy</button>
                                            <button type="button" id="afficherMasquerFormulaire2" class="w-100 btn btn-success btn-lg">Etranger</button>
                                  
                                          </div>
                                          <!-- Form malagasy -->
                                        <div id="monFormulaire" style="display: none">
                                            <div class="col-12">
                                              <label for="address2" class="form-label">Numero CIN</label>
                                              <input type="text" class="form-control" id="champNombre" oninput="filtrerNombres()" placeholder="Votre CIN">
                                            </div>
                                            <div class="col-12">
                                              <label for="address2" class="form-label">Date de délivrance</label>
                                              <input type="date" class="form-control" id="address2">
                                            </div>
                                            <div class="col-12">
                                              <label for="address2" class="form-label">Lieu de délivrance</label>
                                              <input type="text" class="form-control" id="address2">
                                            </div>
                                            <div class="col-12">
                                              <label for="address2" class="form-label">Date de naissance</label>
                                              <input type="date" class="form-control" id="address2">
                                            </div>
                                            <div class="col-12">
                                              <label for="address2" class="form-label">Lieu de naissance</label>
                                              <input type="text" class="form-control" id="address2">
                                            </div>
                                        </div>
                                        <!-- Form etranger -->
                                      <div  id="monFormulaire2"style="display: none">
                                        
                                        <div class="col-12">
                                          <label for="address2" class="form-label">Numéro Passeport ou carte de résident</label>
                                          <input type="text" class="form-control" >
                                        </div>
                                        <div class="col-12">
                                            <label for="address2" class="form-label">Date de délivrance</label>
                                            <input type="date" class="form-control" id="address2" >
                                          </div>
                                          <div class="col-12">
                                            <label for="address2" class="form-label">Lieu de délivrance</label>
                                            <input type="text" class="form-control" id="address2" >
                                          </div>
                                          <div class="col-12">
                                            <label for="address2" class="form-label">Date de naissance</label>
                                            <input type="date" class="form-control" id="address2" >
                                          </div>
                                          <div class="col-12">
                                            <label for="address2" class="form-label">Lieu de naissance</label>
                                            <input type="text" class="form-control" id="address2" >
                                          </div>
                                      </div>
                                    </div>
                          
                                    <hr class="my-4">
                                    <div class="text-center mt-3">
                                      <button type="submit" class="btn btn-primary">Suivant</button>
                                    </div>
                                  </form>
                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <!-- /.type moraux -->
                        <div id="buy-ticket-modal2" class="modal fade">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Personne morale</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <form method="POST" action="#">
                                    <div class="col-md-8">
                                      <label for="country" class="form-label">Forme Juridique</label>
                                      <select class="form-select" id="country" required>
                                        <option >~~Choissisez~~</option>
                                        <option >STE ANONYME AVEC ADMINISTRATEUR GENERAL</option>
                                        <option >COMMUNE RURALE</option>
                                        <option >COMMUNE URBAINE</option>
                                        <option >REGION</option>
                                        <option >DISTRICT</option>
                                        <option >PROVINCE</option>
                                        <option >STE EN PARTICIPATION</option>
                                        <option >INCONNU</option>
                                        <option >ENTREPRISE INDIVIDUELLE</option>
                                        <option >STE EN NOM COLLECTIF</option>
                                        <option >STE EN COMMANDITE SIMPLE</option>
                                        <option >STE EN COMPTE PAR ACTION</option>
                                        <option >SA (Société Anonyme)</option>
                                        <option >SARL (STE A RESPTE LIMITEE)</option>
                                        <option >STE D'ECONOMIE MIXTE</option>
                                        <option >STE D'INTERET NATIONAL</option>
                                        <option >STE ANONYME D'ETAT</option>
                                        <option >ENTREPRISE SOCIALISTE</option>
                                        <option >EPIC (ETS PUBLIC A CAR IND & CO) </option>
                                        <option >STE CIVILE IMMOBILIERE</option>
                                        <option >COOPERATIVE</option>
                                        <option >ASSOCIATION</option>
                                        <option >ONG (ORGANISME NON GOUVERNEMENTAL)</option>
                                        <option >ETS PUBLIC SCIENT.TECHNI</option>
                                        <option >PROJET</option>
                                        <option >SARLU (STE A RESP LIMIT UNI)</option>
                                        <option >OIG (ORGANISME INTER GOUVERNEMENTAL)</option>
                                        <option >EPA (ETS PUBLIC A CARACTERE ADMINISTRATIF)</option>
                                        <option >STE ANONYME UNIPERSONNELE</option>
                                      </select>
                                      <div class="invalid-feedback">
                                      Veuillez sélectionner un forme.
                                      </div>
                                    </div>
                                    <div class="col-md-8">
                                      <label for="country" class="form-label">Regime Fiscale</label>
                                      <select class="form-select" id="choixFormulaire" onchange="afficherFormulaire()" required>
                                        <option >~~Choissisez~~</option>
                                        <option value="1">DROIT COMMUN</option>
                                        <option value="2">ZONE FRANCHE</option>
                                        <option value="3">CODE DES INVESTISSEMENTS</option>
                                        <option value="4">LGIM</option>
                                        <option value="5">CONVENTION D'ETABLISSEMENT</option>
                                        <option value="6">AUTRES</option>
                                      </select>
                                      <div class="invalid-feedback">
                                      Veuillez sélectionner un regime.
                                      </div>
                                    </div>
                                    <div class="col-12" id="formulaire" style="display: none">
                                      <label for="address2" class="form-label">Date agrément </label>
                                      <input type="date" class="form-control" id="address2">
                                      <div class="col-12">
                                        <label for="address2" class="form-label">Ref agrément </label>
                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                      </div>
                                      <div class="col-12">
                                        <label for="address2" class="form-label">Période de grace </label>
                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                      </div>
                                    </div>
                                    <div class="col-12">
                                      <label for="address2" class="form-label">Date de création </label>
                                      <input type="date" class="form-control" id="address2">
                                    </div>
                                    <div class="col-12">
                                      <label for="address2" class="form-label">Capital en Ar </label>
                                      <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                    </div>
                                    <div class="my-3">
                                      <div class="my-3">
                                        <label for="country" class="form-label">RIB</label>
                                        <div class="form-check">
                                          <input id="option1" name="paymentMethod" type="radio" class="form-check-input" required>
                                          <label class="form-check-label" for="credit">Disponible</label>
                                        </div>
                                        <div class="form-check">
                                          <input id="option2" name="paymentMethod" type="radio" class="form-check-input" required>
                                          <label class="form-check-label" for="debit">Non Disponible</label>
                                        </div>
                                      </div>
                                      <div class="col-12" id ="formulaireOption1" style="display: none">
                                        <label for="address2" class="form-label">Entrer votre RIB </label>
                                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                      </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="text-center mt-3">
                                      <button type="submit" class="btn btn-primary">Suivant</button>
                                    </div>
                                  </form>
                                </div>
                              </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                      </section><!-- End Buy Ticket Section -->
                <!--test-->
              
                <hr class="my-4">
                  
              </div>
              
              
            </div>
            
            <!--tess-->
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Renseignement Personnel</h4>
              <form class="needs-validation" novalidate>
                <div class="row g-3">
                    <div class="col-12">
                        <label for="username" class="form-label">Raison sociale de l'utilisateur</label>
                        <div class="input-group has-validation">
                          <input type="text" class="form-control" id="username" placeholder="Username" readonly>
                        </div>
                      </div>
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                     Ceci est un prénom valide, veuillez le renseigner.
                    </div>
                  </div>
      
                  <div class="col-sm-6">
                    <label for="lastName" class="form-label">Prenom</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                     Un nom de famille valide est requis.
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="email" class="form-label">Email </label>
                    <input type="email" class="form-control" id="email" placeholder="exemple@gmail.com">
                    <div class="invalid-feedback">
                    Veuillez entrer une adresse e-mail valide pour les mises à jour d'expédition.
                    </div>
                  </div>
                  <hr class="my-4">
      
                  <h4 class="mb-3">Renseignements sur les activités</h4>
                  
                  <div class="col-12">
                    <label for="address" class="form-label">Activité</label>
                    <textarea class="form-control" id="address" name="message" placeholder="Entrer votre Activité" required ></textarea>
                  </div>
                  <div class="col-12">
                    <label for="address" class="form-label">Précision sur les activités</label>
                    <textarea class="form-control" id="address" name="message" placeholder="Entrer la précision sur les activités" required ></textarea>
                  </div>
                  <!-- Numéro statistique -->
                  <div class="my-3">
                    <label for="country" class="form-label">Numéro statistique</label>
                    <div class="form-check">
                      <input id="option1(numAct)" name="paymentMethod" type="radio" class="form-check-input" required>
                      <label class="form-check-label" for="credit">Disponible</label>
                    </div>
                    <div class="form-check">
                      <input id="option2(numAct)" name="paymentMethod" type="radio" class="form-check-input" required>
                      <label class="form-check-label" for="debit">Pas encore Disponible</label>
                    </div>
                  </div>
                  <div class="col-12" id ="formulaireOption1(numAct)" style="display: none">
                    <label for="address2" class="form-label">Entrer votre Numéro statistique </label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Date de délivrance</label>
                    <input type="date" class="form-control" id="address2" placeholder="Apartment or suite">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Registre de commerce</label>
                    <input type="text" class="form-control" id="address2" placeholder="Registre de commerce">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Date de registre de commerce</label>
                    <input type="date" class="form-control" id="address2" placeholder="Apartment or suite">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Début de l'exercice comptable</label>
                    <input type="date" class="form-control" id="address2" placeholder="JJ/MM">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Clôture de l'exercice comptable</label>
                    <input type="date" class="form-control" id="address2" placeholder="JJ/MM">
                  </div>
                  <!-- Importateur-->
                  <div class="my-3">
                    <label for="country" class="form-label">Importateur </label>
                    <div class="form-check">
                      <input id="option1(numAct)" name="paymentMethod" type="radio" class="form-check-input" required>
                      <label class="form-check-label" for="credit">Oui</label>
                    </div>
                    <div class="form-check">
                      <input id="option2(numAct)" name="paymentMethod" type="radio" class="form-check-input" required>
                      <label class="form-check-label" for="debit">Non</label>
                    </div>
                  </div>
                  <!-- Exportateur-->
                  <div class="my-3">
                    <label for="country" class="form-label">Exportateur </label>
                    <div class="form-check">
                      <input id="option1(numAct)" name="paymentMethod" type="radio" class="form-check-input" required>
                      <label class="form-check-label" for="credit">Oui</label>
                    </div>
                    <div class="form-check">
                      <input id="option2(numAct)" name="paymentMethod" type="radio" class="form-check-input" required>
                      <label class="form-check-label" for="debit">Non</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Nombre de salarié </label>
                    <input type="text" class="form-control" id="champNombre" oninput="filtrerNombres()" placeholder="Entrer le nombre de salarié">
                  </div>
                  <hr class="my-4">
                  
                  <h4 class="mb-3">Renseignements sur le siège</h4>
                  <div class="col-12">
                    <label for="address2" class="form-label">Adresse actuelle <span class="text-body-secondary">(Siege)</span></label>
                    <textarea class="form-control" id="address" name="message" placeholder="Entrer votre adresse actuelle" required ></textarea>
                    </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Fokontany </label>
                    <input type="text" class="form-control" id="address2" placeholder="Votre fokontany">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Commune </label>
                    <input type="text" class="form-control" id="address2" placeholder="Votre commune">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">District </label>
                    <input type="text" class="form-control" id="address2" placeholder="Votre district">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Région </label>
                    <input type="text" class="form-control" id="address2" placeholder="Votre région">
                  </div>
                  <div class="col-12">
                    <label for="address2" class="form-label">Province </label>
                    <input type="text" class="form-control" id="address2" placeholder="Votre province">
                  </div>
              </form>
            </div>
          </div>
          
        </main>
        <hr class="my-4">
                
        <div >
            <div class="col-md-7 col-lg-8" style="float: left">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox"> 
                <label class="form-check-label" for="save-info">Je certifie que ces renseignements sont complets et exacts</label>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox2"> 
                <label class="form-check-label" for="save-info">M'envoyer par e-mail les informations saisies</label>
              </div>
              <div class="container" id="resultat">
                <p id="paragraphe"></p>
              </div>
            </div>
        </div>
        <p style="clear:both;"></p>
        <hr class="my-4" style="clear:both;">
                <!-- Le bouton initialement verrouillé -->
                <button id="myButton" class="w-100 btn btn-primary btn-lg" onclick="genererValeurAleatoire()" disabled>Terminer</button>
      </div>
      
    <!-- Le contenu de votre page va ici -->
      
    <!-- Inclure les fichiers JavaScript de Bootstrap (jQuery requis) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Le contenu de  javascript-->
<script>
      // Récupérez le bouton et le formulaire par leur ID
      const boutonAfficherMasquer = document.getElementById('afficherMasquerFormulaire');
      const formulaire = document.getElementById('monFormulaire');
      const boutonAfficherMasquer2 = document.getElementById('afficherMasquerFormulaire2');
      const formulaire2 = document.getElementById('monFormulaire2');
      const option1Radio = document.getElementById('option1');
      const option2Radio = document.getElementById('option2');
      const formulaireOption1 = document.getElementById('formulaireOption1');
      // numAct
      const option1Radio_numAct = document.getElementById('option1(numAct)');
      const option2Radio_numAct = document.getElementById('option2(numAct)');
      const formulaireOption1_numAct = document.getElementById('formulaireOption1(numAct)');
      // Ajoutez un gestionnaire d'événements au clic sur le bouton
      boutonAfficherMasquer.addEventListener('click', function () {
          // Utilisez le style.display pour afficher ou masquer le formulaire
          if (formulaire.style.display === 'none') {
              formulaire.style.display = 'block';
          } else {
              formulaire.style.display = 'none';
          }
          formulaire2.style.display = 'none'
      });
      boutonAfficherMasquer2.addEventListener('click', function () {
          // Utilisez le style.display pour afficher ou masquer le formulaire
          if (formulaire2.style.display === 'none') {
              formulaire2.style.display = 'block';
          } else {
              formulaire2.style.display = 'none';
          }
          formulaire.style.display = 'none'
      });
      // Ajoutez des écouteurs d'événements pour chaque bouton radio
      option1Radio.addEventListener('change', function () {
          if (option1Radio.checked) {
              formulaireOption1.style.display = 'block';
          }
      });
      option2Radio.addEventListener('change', function () {
          if (option2Radio.checked) {
              formulaireOption1.style.display = 'none';
          }
      });
      option1Radio_numAct.addEventListener('change', function () {
          if (option1Radio_numAct.checked) {
              formulaireOption1_numAct.style.display = 'block';
          }
      });
      option2Radio_numAct.addEventListener('change', function () {
          if (option2Radio_numAct.checked) {
              formulaireOption1_numAct.style.display = 'none';
          }
      });

      
    // Fonction pour vérifier l'état de la case à cocher et déverrouiller le bouton en conséquence
    function verifierCheckbox() {
          var checkbox = document.getElementById('checkbox');
          var bouton = document.getElementById('myButton');
    
          // Si la case à cocher est cochée, déverrouiller le bouton, sinon le verrouiller
          bouton.disabled = !checkbox.checked;
        }
    
        // Attacher la fonction au changement d'état de la case à cocher
        document.getElementById('checkbox').addEventListener('change', verifierCheckbox);

        // code generer une code de reference
        var codesGeneres = [];

        function genererValeurAleatoire() {
          var valeurAleatoire;

          do {
            valeurAleatoire = genererCode();
          } while (codesGeneres.includes(valeurAleatoire));

          codesGeneres.push(valeurAleatoire);

          afficherResultat(valeurAleatoire);
        }

        function genererCode() {
          var partieFixe = "CODE-";
          var partieAleatoire = Math.floor(Math.random() * 1000);
          return partieFixe + partieAleatoire;
        }

        function afficherResultat(resultat) {
          if (checkbox2.checked) {
          var resultatDiv = document.getElementById("resultat");
          var resultatDiv2 = document.getElementById("checkbox2");

          var input = document.getElementById('maZoneDeTexte');
          var paragraphe = document.getElementById("paragraphe")
          paragraphe.innerHTML = "Code de référence généré : <strong>" + resultat +"</strong>";
          input.value = "";
          input.value += resultat;
          }
        }
        function filtrerNombres() {
        // Récupérer la référence du champ de saisie par son identifiant
        var champNombre = document.getElementById("champNombre");

        // Filtrer les caractères non numériques
        champNombre.value = champNombre.value.replace(/[^0-9]/g, '');
}
function afficherFormulaire() {
    // Récupérer la référence de la combobox par son identifiant
    var choixFormulaire = document.getElementById("choixFormulaire");

    // Récupérer la référence des formulaires par leur identifiant
    var formulaire = document.getElementById("formulaire");

    // Masquer tous les formulaires
    formulaire.style.display = "none";
    formulaire.style.backgroundColor = "gray";
    formulaire.style.color = "white";
    // Afficher le formulaire correspondant au choix
    if (choixFormulaire.value === "2") {
        formulaire.style.display = "block";
    }
}

  </script>
      <!-- Le contenu de javascript -->
  </body>
</html>
