
<!DOCTYPE html>
<html>
<head>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  
  <style>
   #menu{

    position : absolute;
    left : 0px;
    width : 300px;
    height : 700px;
    top : 50px;
   /* background-color: #010300; /* Couleur d'arrière-plan noire */
    background-color: #1b2b31;
    /*padding: 10px; /* Espacement intérieur pour créer une marge autour des boutons */
    /*display: inline-block; /* Pour que le conteneur s'adapte à la largeur des boutons */
  
   }
   #menu button {
      width: 70%;
      height: auto;
    }
   #a {
    position : absolute;
    top: 150px;
    left: 30px;
    background-color : black;
    color : white;
    border-color : white;
    border-radius : 8px;
    border: 4px solid;
   
  }

  #b {
    position : absolute;
    top: 250px;
    left: 30px;
    background-color : black;
    color : white;
    border-color : white;
    border-radius : 8px;
    border: 1px solid;
  
  }

  #c {
    position : absolute;
    top: 350px;
    left: 30px;
    background-color : black;
    color : white;
    border-color : white;
    border-radius : 8px;
    border: 1px solid;
   
  }
  #d {
    position : absolute;
    top: 450px;
    left: 30px;
    background-color : black;
    color : white;
    border-color : white;
    border-radius : 8px;
    border: 1px solid;
  
  }

  #e {
    position : absolute;
    top: 550px;
    left: 30px;
    background-color : black;
    color : white;
    border-color : white;
    border-radius : 8px;
    border: 1px solid;
    
  }
  
  #men {
    position : absolute;
    top: 50px;
    left: 90px;
    color : white;
 
  }
  #titre{
    position : absolute;
    top: 125px;
    left: 650px;
 
  }
  #nom{

    position : absolute;
    top: 200px;
    left: 450px;
  }
#info{
  position : absolute; 
  width : 400px;
  left : 550px;
  top : 185px;

}
#compte{
  position : absolute; 
  width : 400px;
  left : 400px;
  top : 80px;
 
}
#sar{
  position : absolute; 
  right : 400px;
  width : 50px;
    height : 50px;
    top : 0px;
}
#ti{
    position : absolute;
    left : 400px;
    top : 110px;
}
  </style>
</head>
<body>
<?php $i = 0;?>
        <?php foreach($utilisateur as $user):?>
<div id="menu">
    <h1 id = "men"> Menu </h1>
<button class="btn btn-secondary btn-block" id = "a" onclick="redirigerVersLogin()" >Mon Profil</button>
<script>
  function redirigerVersLogin() {
    window.location.href = "<?php echo base_url('Profil/index/'.$ID); ?>";
  }
</script> 
<button class="btn btn-secondary btn-block"  id = "b" onclick="redirigerVersReserv()" >Mes réservations</button>
<script>
  function redirigerVersReserv() {
    window.location.href = "<?php echo base_url('reservation/index/'); ?>" ;
  }
</script> 
<button class="btn btn-secondary btn-block"  id = "c" onclick="redirigerVersPropo()" >Propositions</button>
<script>
  function redirigerVersPropo() {
    window.location.href = "<?php echo base_url('proposition/index/'); ?>" ;
  }
</script> 
<button class="btn btn-secondary btn-block"  id = "d" onclick="redirigerVersDemande()" >Demandes</button>
<script>
  function redirigerVersDemande() {
    window.location.href = "<?php echo base_url('demande/index/'); ?>" ;
  }
</script> 
<button class="btn btn-secondary btn-block"  id = "e" onclick="redirigerVerspub()" >Mes publications</button>
<script>
  function redirigerVerspub() {
    window.location.href = "<?php echo base_url('publication/index/'); ?>" ;
  }
</script> 
</div>

<div id="compte">
<img src="<?php echo base_url('assets/image/IMG_2841.PNG'); ?>" alt="carCO" id="sar">
<h4><?php echo $user->Nom;?>  <t>
<?php echo $user->Prenom;?></h4> 
</div>
<div id ="centre">
    <h2 id ="titre"> Vos informations</h2>
    </div >
    
    
    <h3 id = "ti">  Mon profil</h3>
        <div id="info">
       
        <form method="post" action="<?php echo base_url('Profil/modifier/');?>">
                        <div class="modal-body">
                            <div class="row">
                            <div class="col">
                                    <input type="hidden" class="form-control form-control-sm" value="<?php echo $user->ID_utilisateur;?>" name="ID"/>
                                    <label for="Identifiant"> Identifiant :</label>
                                    <input style="font-size: 15px;" type="text" class="form-control form-control-sm" value="<?php echo $user->ID_utilisateur;?>"  readonly/>
                                </div>
                                <div class="col">
                                    
                                    <label for="Nom"> Nom :</label>
                                    <input style="font-size: 15px;" type="text" class="form-control form-control-sm" value="<?php echo $user->Nom;?>" name="nom" required/>
                                </div>
                                <div class="col">
                                    <label for="Prenom">Prenom:</label>
                                    <input type="text" style="font-size: 15px;" class="form-control form-control-sm" value="<?php echo $user->Prenom;?>" name="prenom" required/>
                                </div>
                                <div class="col">
                                    <label for="Adresse">Adresse:</label>
                                    <input type="text" style="font-size: 15px;" class="form-control form-control-sm" value="<?php echo $user->Adresse;?>" name="adresse" required/>
                              
                                </div> <div class="col">
                                    <label for="mail"> mail:</label>
                                    <input type="text" style="font-size: 15px;" class="form-control form-control-sm" value="<?php echo $user->mail;?>" name="mail" required/>
                                </div><div class="col">
                                    <label for="Numero"> Numero:</label>
                                    <input type="text" style="font-size: 15px;" class="form-control form-control-sm" value="<?php echo $user->Numero;?>" name="numero" required/>
                                </div>
                                <div class="col">
                                    <label for="Mdp"> Mot de passe:</label>
                                    <input type="text" style="font-size: 15px;" class="form-control form-control-sm" value="<?php echo $user->Mdp;?>" name="mdp" required/>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          
                         <center> <input type="submit" style="font-size: 16px;" class="btn btn-primary btn-lg" value="Modifier"/></center>
                        </div>
                        </form></div>
        <?php $i+=1;?>
        <?php endforeach;?>
       

        <?php if (isset($_GET['modifier']) && $_GET['modifier'] === 'true') { ?>
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