
<!DOCTYPE html>
<html>
<head>
  <!-- Inclure les fichiers CSS de Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/js/bootstrap.min.js'); ?>">
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
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
    border: 4px solid;
   
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
#container{
  position : absolute; 
width : 350px;
right : 25px;
top : 50px;
background-color: #1b2b31;
color : white;
height : 700px;
}
#container input{
  width : 70%;
  height: auto;
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
 /* top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);*/
}

/*#tableau {
  position : absolute; 
  left : 350px;
  top : 200px;
  width : 400px;
  width: 50%;
  border-collapse: collapse;
}
#tableau table {
      width: 100%;
      border-collapse: collapse;
   }
th, td {
           padding: 7px;
            text-align: left;
           border-bottom: 1px solid #ddd;
        }
        
th {
            background-color: #f2f2f2;
}*/

#check{
            width : 30px;
        }
/* .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 300px;
        }*/

/*.modal {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 300px;
  height: 200px;
  padding: 20px;
  background-color: #f1f1f1;
  z-index: 9999;
    }*/
</style>

  </style>
</head>
<body>/
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
<div id="compte">
<img src="<?php echo base_url('assets/image/IMG_2841.PNG'); ?>" alt="carCO" id="sar">
<h4><?php echo $user->Nom;?>  <t>
<?php echo $user->Prenom;?></h4> 

<h3 id = "ti">  Propositions de covoituage </h3> <br>


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ajout">
  Ajouter
</button>

<!-- Modal -->
<div class="modal fade" id="ajout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouvelle proposition </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url('proposition/ajouter');?>">
      <div class="modal-body">
        <div class="col">
        <label for="Depart">Lieu de Départ:</label>
        <input type="text" class="form-control" id="prenom" placeholder="quel est le lieu de depart? " name="depart" required>
        </div>
        <div class="col">
        <label for="destination">Lieu de destination:</label>
        <input type="text" class="form-control" id="prenom" placeholder="où comptez vous vous rendre? " name="destination" required>
        </div>
        <div class="col">
        <label for="date">Date :</label>
        <input type="date" class="form-control" id="prenom" placeholder="a quel date es ce prévu" name="date" required>
        </div>
        <div class="col">
        <label for="heure">heure de départ :</label>
        <input type="time" class="form-control" id="prenom" placeholder="heure de départ" name="heure" required>
        </div>
        <div class="col">
        <label for="nbre_place">nombre de place disponible:</label>
        <input type="number" class="form-control" id="prenom" placeholder="Combien de place proposez vous?" name="nbre_place" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
      </form>
    </div>
  </div>
</div>



<?php $i+=1;?>
        <?php endforeach;?>
</div>

  <?php $i = 0; ?>
<div id="tableau">
  <br> <br> <br>
    <table>
        <thead>
            <tr>
                <th>Publication n°</th>
                <th>auteur</th>
                <th>Numero telephone</th>
                <th>Lieu départ</th>
                <th>Destination</th>
                <th>Date de départ</th>
                <th>Heure de départ</th>
                <th>nombre de place disponible</th>
                <th><img src="<?php echo base_url('assets/image/check.PNG'); ?>" alt="carCO" id="check"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tableau as $tab): ?>
                <tr>
                    <td><?php echo $tab->ID_proposition; ?></td>
                    <td><?php echo $tab->Nom; ?> <?php echo $tab->Prenom; ?></td>
                    <td><?php echo $tab->Numero; ?></td>
                    <td><?php echo $tab->depart; ?></td>
                    <td><?php echo $tab->destination; ?></td>
                    <td><?php echo $tab->date_depart; ?></td>
                    <td><?php echo $tab->heure_depart; ?></td>
                    <td><?php echo $tab->nbre_place; ?></td>
                    <td>
                    
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#reserver<?php echo $tab->ID_proposition;?>">
  Réserver
</button>
</td>
<!-- Modal -->
<div class="modal fade" id="reserver<?php echo $tab->ID_proposition;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nombre de place à reserver pour le publication n° <?php echo $tab->ID_proposition;?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?php echo base_url('proposition/reserver');?>">
      <div class="modal-body">
        <div class="col">
          <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->ID_proposition;?>" name="id_post"/>
          <input type="hidden" class="form-control form-control-sm" value="<?php echo $tab->nbre_place;?>" name="nbre_place"/>
          <label for="nombre">Nombre de place:</label>
          <input style="font-size: 11px;" type="number" class="form-control form-control-sm"  name="nombre" required/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="submit" class="btn btn-primary">Réserver</button>
      </div>
      </form>
    </div>
  </div>
</div>

  
                     
                    </tr>
                    
                   
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal de confirmation de suppression -->













        <?php if (isset($_GET['modifier']) && $_GET['modifier'] === 'true') { ?>
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            alert("Identifiants ou mot de passe invalides.");
        });
    </script>
<?php } ?>

</script>

<script>
        // Fonction pour ouvrir la fenêtre modale
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Fonction pour fermer la fenêtre modale
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }
    </script>







  <!-- Inclure les fichiers JavaScript de Bootstrap -->
 

  <script>
    // Fonction pour ouvrir la fenêtre modale
    function openModal() {
        $('#exampleModal').modal('show');
    }

    // Fonction pour fermer la fenêtre modale
    function closeModal() {
        $('#exampleModal').modal('hide');
    }
</script>
</body>
</html>