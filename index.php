<?php
require_once __DIR__ . '/includes/db.php';
require_once __DIR__ . '/includes/header.php';
?>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

<div class="position-relative text-center">
    <img src="img/img3.png" class="img-fluid w-100" style="height:350px; object-fit:cover;">
    <div class="position-absolute top-50 start-50 translate-middle text-white">
        <h2><b>TechSolutions</b></h2>
        <a>Votre entreprise spécialisée.</a>
    </div>
</div>
<br> <br>

<div class="position-relative text-center">
    <div class="container mt-5">

  <!-- ITEM 1 -->
  <div class="row align-items-center p-4 border rounded-0">
    <div class="col-md-6">
      <img src="img/metier1.png" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h3>Développeur logiciel</h3>
      <p>Notre entreprise regroupe une équipe de 15 développeurs responsables de la création et de la maintenance des logiciels sur mesure pour les clients.</p>
    </div>
  </div>

  <!-- ITEM 2 -->
  <div class="row align-items-center p-4 border border-top-0 rounded-0 flex-md-row-reverse">
    <div class="col-md-6">
      <img src="img/metier2.png" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h3>SysAdmin</h3>
      <p>Notre entreprise dispose de 5 gestionnaires des infrastructures systèmes et réseau. Ils sont chargés de la mise en place et de l'entretien des infrastructures informatiques, incluant les réseaux et les serveurs.</p>
    </div>
  </div>

  <!-- ITEM 3 -->
  <div class="row align-items-center p-4 border border-top-0 rounded-0">
    <div class="col-md-6">
      <img src="img/metier3.png" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h3>Designeur</h3>
      <p>Notre entreprise dispose de 5 designers spécialisés dans la conception d’interfaces utilisateur attrayantes et fonctionnelles.</p>
    </div>
  </div>

  <!-- ITEM 4 -->
  <div class="row align-items-center p-4 border border-top-0 rounded-0 flex-md-row-reverse">
    <div class="col-md-6">
      <img src="img/metier4.png" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h3>Marketeur et Vendeur</h3>
      <p>Notre équipe dispose de 10 marketeurs et vendeurs chargés de la stratégie commerciale, de la promotion des services et de la relation client.</p>
    </div>
  </div>

  <!-- ITEM 5 -->
  <div class="row align-items-center p-4 border border-top-0 rounded-0">
    <div class="col-md-6">
      <img src="img/metier5.png" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h3>Support Client</h3>
      <p>Dans notre entreprise, nous avons 5 membres du support client qui fournissent l’assistance technique et le support nécessaire aux clients.</p>
    </div>
  </div>

  <!-- ITEM 6 -->
  <div class="row align-items-center p-4 border border-top-0 rounded-0 flex-md-row-reverse">
    <div class="col-md-6">
      <img src="img/metier6.png" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h3>RH et Administration</h3>
      <p>Nous avons dans notre équipe 5 personnes chargées de l’administration et des ressources humaines. Elles gèrent le personnel, le recrutement et les aspects administratifs de l’entreprise.</p>
    </div>
  </div>

  <!-- ITEM 7 -->
  <div class="row align-items-center p-4 border border-top-0 rounded-0">
    <div class="col-md-6">
      <img src="img/metier7.png" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
      <h3>Direction</h3>
      <p>Nous disposons de 5 salariés en direction qui sont responsables de la gestion globale et de la stratégie de l’entreprise.</p>
    </div>
  </div>

</div>

</div>
<style>
  .img-fixed {
    width: 100%;
    height: 250px; /* Tu peux changer la hauteur */
    object-fit: cover; /* Garde une belle image sans déformation */
    border-radius: 8px;
  }
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>