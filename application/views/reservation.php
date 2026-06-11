
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
    border: 1px solid;
   
  }

  #b {
    position : absolute;
    top: 250px;
    left: 30px;
    background-color : black;
    color : white;
    border-color : white;
    border-radius : 8px;
    border: 4px solid;
  
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
#tableau {
  position: absolute;
  left: 500px;
  top: 200px;
  width: 800px;
  /*background-color: #1b2b31;*/
  color: black;
  padding: 10px;
}

#tableau table {
  width: 100%;
  border-collapse: collapse;
}

#tableau th,
#tableau td {
  padding: 7px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

#tableau th {
  background-color: #f2f2f2;
}

#tableau img#check {
  width: 20px;
  height: 20px;
}
.modal-dialog {
  position: fixed;
  width: 400px; /* Définissez la largeur souhaitée */
  height: 300px; /* Définissez la hauteur souhaitée */
 left : 30%;
 top : 30%;
 
}

  </style>
</head>
<body>
<?php $i = 0;?>
        <?php foreach($profil as $user):?>
<div id="menu">
    <h1 id = "men"> Menu </h1>
<button class="btn btn-secondary btn-block" id = "a" onclick="redirigerVersLogin()" >Mon Profil</button>
<script>
  function redirigerVersLogin() {
    window.location.href = "<?php echo base_url('Profil/index/'); ?>";
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

<h3 id = "ti">  Mes réservations </h3>


<div id="compte">
<img src="<?php echo base_url('assets/image/IMG_2841.PNG'); ?>" alt="carCO" id="sar">
<h4><?php echo $user->Nom;?>  <t>
<?php echo $user->Prenom;?></h4> 
</div>

<?php $i+=1;?>
        <?php endforeach;?>



        <?php $i = 0; ?>
<div id="tableau">
    <table>
        <thead>
            <tr>
               
                <th>Date départ</th>
                <th>Heure départ</th>
                <th>De</th>
                <th>à</th>
                <th>conducteur</th>
                <th>place réservé</th>
                <th>Numero du conducteur </th>
              
                <th><img src="<?php echo base_url('assets/image/check.PNG'); ?>" alt="carCO" id="check"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($tableau as $tab): ?>
                <tr>
                 
                    <td><?php echo $tab->date_depart; ?></td>
                    <td><?php echo $tab->heure_depart; ?></td>
                    <td><?php echo $tab->depart; ?></td>
                    <td><?php echo $tab->destination; ?></td>
                    <td><?php echo $tab->Nom; ?> <?php echo $tab->Prenom; ?></td>
                    <td><?php echo $tab->nombrePlace; ?></td>
                    <td><?php echo $tab->Numero; ?></td>

                    <td> <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#annulerReservation<?php echo $tab->ID_reservation;?>">
  Annuler reservation
</button>  
<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modifierReservation<?php echo $tab->ID_reservation;?>">
  modifier reservation
</button>
</td>

<!--modal de modification reservation-->

<div class="modal fade" id="modifierReservation<?php echo $tab->ID_reservation;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Modifier le nombre de place reserver </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url('reservation/modifier');?>">
      <div class="modal-body">
        <div class="col">
          <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->ID_proposition;?>" name="id_post"/>
          <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->ID_reservation;?>" name="id_reserv"/>
          <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->nbre_place;?>" name="nbre_place"/>
          <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->nombrePlace;?>" name="nombreA"/>
          <label for="nombre">Nombre de place:</label>
          <input style="font-size: 11px;" type="number" class="form-control form-control-sm"  name="nombre"
           value = "<?php echo $tab->nombrePlace;?>" required/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Modifier</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--modal de suppression reservation-->
<div class="modal fade" id="annulerReservation<?php echo $tab->ID_reservation;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-warning"></i>  Supprimer la reservation n° <?php echo $tab->ID_reservation;?> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url('reservation/annuler');?>">
      <div class="modal-body">
      <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->ID_proposition;?>" name="id_post"/>
      <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->nombrePlace;?>" name="nombre"/>
      <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->nbre_place;?>" name="nbre_place"/>
      <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->ID_reservation;?>" name="id_reserv"/>
      <p class="alert alert-danger" style="text-align: center;"><i class="fa fa-warning"></i>   Souhaitez vous vraiment 
      annuler votre reservation de <?php echo $tab->nombrePlace; ?> place pour le <?php echo $tab->date_depart; ?> de <?php echo $tab->depart; ?> à <?php echo $tab->destination; ?> avec 
           <?php echo $tab->Nom; ?> <?php echo $tab->Prenom; ?>
</p>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Confirmer</button>
      </div>
      </form>
    </div>
  </div>
</div>

        <?php if (isset($_GET['modifier']) && $_GET['modifier'] === 'true') { ?>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            alert("Identifiants ou mot de passe invalides.");
        });
    </script>
<?php } ?>

<?php endforeach; ?>


  <!-- Inclure les fichiers JavaScript de Bootstrap -->
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>