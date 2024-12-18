<!DOCTYPE html>
<html>
<head>
    <title>Projet Impots</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .container {
            margin-top: 90px;
        }
        #navbarCollapse {
            margin-left: 1000px;
        }
    </style>
</head>
    
    <body class="d-flex align-items-center py-4 bg-body-tertiary">
        <!--bonnn -->
      <div class="bot">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Acceuil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Se connecter</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          
      </div>
        <!--fin-->
        
    <div class="container">
      <!-- Radio buttons -->
      <h2>Cliquez sur le bouton pour générer une valeur aléatoire unique</h2>

  <button onclick="genererValeurAleatoire()">Générer</button>

  <div id="resultat"></div>

  <script>
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
      var resultatDiv = document.getElementById("resultat");
      var nouveauParagraphe = document.createElement("p");
      nouveauParagraphe.textContent = "Code de référence généré : " + resultat;
      resultatDiv.appendChild(nouveauParagraphe);
    }
  </script>

    </div>
    <!-- Le contenu de votre page va ici -->

    <!-- Inclure les fichiers JavaScript de Bootstrap (jQuery requis) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
