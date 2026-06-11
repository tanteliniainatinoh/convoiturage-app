
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
    border: 4px solid;
    
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
  left: 300px;
  top: 250px;
  width: 500px;
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
#tablea {
  position: absolute;
  left: 900px;
  top: 250px;
  width: 500px;
  /*background-color: #1b2b31;*/
  color: black;
  padding: 10px;
}

#tablea table {
  width: 100%;
  border-collapse: collapse;
}

#tablea th,
#tablea td {
  padding: 7px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

#tablea th {
  background-color: #f2f2f2;
}

#tablea img#check {
  width: 20px;
  height: 20px;
}
#p{
position : absolute;
left : 550px;
top : 200px;
height:25px;
border : 2px solid black;
border-radius:4px;
color: white;
background-color: black;
}
#dm{
    position : absolute;
left : 1200px;
top : 200px;
height:25px;
border : 2px solid black;
border-radius:4px;
color: white;
background-color: black;
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


#boutonA{
    width : 100px;
}
#ti{
    position : absolute;
    left : 400px;
    top : 110px;
}
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

<?php $i+=1;?>
        <?php endforeach;?>
</div>

 <h3 id = "ti">  Mes Publications </h3>
 
<h4 id="p">Propositions  </h4>

  <?php $i = 0; ?>
<div id="tableau">



    <table>
        <thead>
            <tr>
                <th>Nature de la publication</th>
                <th>Lieu départ</th>
                <th>Destination</th>
                <th>Date de départ</th>
                <th>Heure de départ</th>
                <th>nombre de place disponible</th>
                <th><img src="<?php echo base_url('assets/image/check.PNG'); ?>" alt="carCO" id="check"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tableauA as $tabA): ?>
                <tr>
                    <td>Proposition N° <?php echo $tabA->ID_proposition; ?></td>
                    <td><?php echo $tabA->depart; ?></td>
                    <td><?php echo $tabA->destination; ?></td>
                    <td><?php echo $tabA->date_depart; ?></td>
                    <td><?php echo $tabA->heure_depart; ?></td>
                    <td><?php echo $tabA->nbre_place; ?></td>
                    <td><form method="post" action="<?php echo base_url('publication/supprimerPro'); ?>">
                        <input type="hidden" name="id_post" value="<?php echo $tabA->ID_proposition; ?>"> 
                        <button type="submit" id="boutonA" class="btn btn-danger">Supprimer</button> </form> <br>

                       

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




<h4 id="dm">Demandes  </h4>

<?php $i = 0; ?>
<div id="tablea">
    <table>
        <thead>
            <tr>
                <th>Nature de la publication</th>
                <th>Lieu départ</th>
                <th>Destination</th>
                <th>Date de départ</th>
                <th>Heure de départ</th>
                <th>nombre de place <br> demandé</th>
                <th><img src="<?php echo base_url('assets/image/check.PNG'); ?>" alt="carCO" id="check"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tableauB as $tabB): ?>
                <tr>
                <td>Demande N° <?php echo $tabB->ID_demande; ?></td>
                    <td><?php echo $tabB->depart_souhaiter; ?></td>
                    <td><?php echo $tabB->arivee_souhaiter; ?></td>
                    <td><?php echo $tabB->date_souhaiter; ?></td>
                    <td><?php echo $tabB->heure_souhaiter; ?></td>
                    <td><?php echo $tabB->nbre_place_demander; ?></td>
                    <td><form method="post" action="<?php echo base_url('publication/supprimerDem'); ?>">
                        <input type="hidden" name="id_dem" value="<?php echo $tabB->ID_demande; ?>"> 
                        <button type="submit" id="boutonA" class="btn btn-danger">Supprimer</button> </form> <br>


                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
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