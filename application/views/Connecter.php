
<!DOCTYPE html>
<html>
<head>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  
  <style>
    body {
    
    
    }
 
    
    .container {
        
        position: absolute;
      width: 400px;
      right : 70px;
    top : 325px;
     
    }

    .inscrire{
      position: absolute;
   top : 70px;
   right :100px;

    } 
    .acceuil{
      position: absolute;
      left: 90px;
      top: 20px;
    } 
    .logo{
        position: absolute;
        top: 300px;
        left : 400px;
      
    } 
    .texte{
        position: absolute;
        font-size : 18px;
       top : 150px;
       left : 100px;
        right : 250px;
    
  } 
  </style>
</head>
<body>





<div class="inscrire">
  
  <button class="btn btn-success btn-lg" id="inscrire" onclick="redirigerVersLogin()">S'inscrire </button>
  <script>
  function redirigerVersLogin() {
    window.location.href = "<?php echo base_url('Login'); ?>";
  }
</script> 
</div>
<div class="logo">
<img src="<?php echo base_url('assets/image/logo.PNG'); ?>" alt="logo" width="450px" height="250px">
</div> 

<div class="texte">
<center> <p>  Optez pour le covoiturage et découvrez une solution de transport économique, écologique et conviviale ! Notre site vous offre la possibilité de trouver facilement des trajets partagés qui correspondent à vos besoins. Rejoignez notre communauté de covoitureurs dès maintenant et profitez des nombreux avantages du covoiturage pour simplifier vos déplacements!</p></center>
</div>

<div class="container">
<center> <h3 class="title">veuillez vous authentifier</h3> </center>
<form method="post" action="<?php echo base_url('Connecter/authentification')?>">
      
      <div class="form-group">
        <label for="ID">Identifiant:</label>
        <input type="text" class="form-control" id="prenom" placeholder="Entrez votre adresse" name="ID" required>
      </div>
    
      <div class="form-group">
        <label for="mdp">Mot de passe :</label>
        <input type="password" class="form-control" id="prenom" placeholder="" name="mdp" required>
      </div> <center>
      <button type="submit" class="btn btn-primary btn-lg">Se connecter  </button></center>
    </form>
  </div>

 <!-- Script JavaScript pour afficher la boîte de dialogue de confirmation -->
 <?php if (isset($_GET['error']) && $_GET['error'] === 'false') { ?>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            alert("Identifiants ou mot de passe invalides.");
        });
    </script>
<?php } ?>

  <!-- Inclure les fichiers JavaScript de Bootstrap -->
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>