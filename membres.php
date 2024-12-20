<?php
include_once "header_membre.php";
?>

<!-- Titre principal -->
<h1 class="text-center mb-4">Nos points de collecte</h1>
<!-- Texte -->
<p class="text-center mb-4">
  <strong>Où déposer vos jouets ?<br>
    Sur cette carte vous pourrez retrouver tous nos points de collecte.
  </strong>
</p>
<div class="row align-items-center">
  <!-- Colonne pour le texte (à gauche) -->
  <div class="col-md-5 d-flex flex-column align-items-center">
    <div class="text-left">
      <p>
        <strong>ROANNE</strong><br>
        <img class="iconeMap" src="img/epingle-2.png">
        Club Suzanne Lacore - 29 rue Bravard<br>
        <img class="iconeMap" src="img/epingle-5.png">
        Club Jean Puy - 5 rue Jean Puy<br>
        <img class="iconeMap" src="img/epingle-6.png">
        Centre social La Livatte - 97 rue A. Thomas<br><br>
 
        <strong>RIORGES</strong><br>
        <img class="iconeMap" src="img/epingle-7.png">
        Centre social - 1 place Jean Cocteau<br><br>
 
        <strong>LE COTEAU</strong><br>
        <img class="iconeMap" src="img/epingle-4.png">
        Centre social - 3 rue Auguste Gelin<br><br>
 
        <strong>CHARLIEU</strong><br>
        <img class="iconeMap" src="img/epingle-8.png">
        M.J.C. - 1 rue du Pont de Pierre<br><br>
 
        <strong>SAINT JULIEN DE JONZY</strong><br>
        <img class="iconeMap" src="img/epingle.png">
        Decheterie - Lieu dit La Thuillere
      </p>
    </div>
  </div>
 
  <!-- Colonne pour la carte (à droite) -->
  <div class="col-md-7">
    <div id="map"></div>
  </div>
</div>
</div>
 
<!-- Intégration de Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="js/carte.js"></script>

<?php
include_once "footer.php";
?>