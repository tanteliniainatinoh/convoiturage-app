
<!DOCTYPE html>
<html>
<head>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
 
    
    .container {
      position: absolute;
      width: 500px;
      right : 300px;
    }

    .connecter{
      position: absolute;
      right: 120px;
      top: 60px;
    } 
    #log{
      position: absolute;
      width : 450px;
      left : 100px;
     right : 200px;
     margin-left : 50px;
     bottom:300px;;
   

    }
    
  </style>
</head>
<body>


<div>
<img src="<?php echo base_url('assets/image/logo.PNG'); ?>" alt="carCO" id="log">
</div>
<div class="connecter">
  
  <button class="btn btn-primary" id="connecter" onclick="redirigerVersCoucou()">Se connecter </button>
  <script>
  function redirigerVersCoucou() {
    window.location.href = "<?php echo base_url('Connecter'); ?>";
  }
</script> 
</div>
<div class="container">
<center> <h3 class="title">Veuillez remplier les informations précédente</h3> </center>
<form method="post" action="<?php echo base_url('Login/ajouter/')?>">
      <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" class="form-control" id="nom" placeholder="Entrez votre nom" name="nom" required>
      </div>
      <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre prénom" name="prenom" required>
      </div>
      <div class="form-group">
        <label for="adresse">Adresse :</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre adresse" name="adresse" required>
      </div>
      <div class="form-group">
        <label for="mail">Adresse e-mail:</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre adresse" name="mail" required>
      </div>
      <div class="form-group">
        <label for="numero">Numero telephone :</label>
        <input type="number" class="form-control" id="prenom" placeholder="03..." name="numero" required>
      </div>
      <div class="form-group">
        <label for="mdp">Mot de passe :</label>
        <input type="password" class="form-control" id="prenom" placeholder="" name="mdp" required>
      </div> <center>
      <button type="submit" class="btn btn-primary">S'inscrire</button></center>
    </form>
  </div>

 <!-- Script JavaScript pour afficher la boîte de dialogue de confirmation -->
 
<script>
    // Attachez un gestionnaire d'événement au formulaire lorsqu'il est soumis
    document.querySelector('form').addEventListener('submit', function(event) {
      event.preventDefault(); // Empêche le comportement par défaut du formulaire

      // Afficher une boîte de dialogue de confirmation
      alert('Formulaire soumis avec succès!');
    });
  </script>
  <!-- Inclure les fichiers JavaScript de Bootstrap -->
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>