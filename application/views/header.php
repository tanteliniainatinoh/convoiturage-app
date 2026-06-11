<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
       <style>
header{

    background-color : #e2e2e2;
   
    height : 50px;
}
#logo{
    position : absolute;
    width : 100px;
    height : 45px;
    margin-top:3px;
    margin-left : 15px;
    border-radius : 28px;
}
#deco{
    position : absolute;
    left : 1400px;
    margin-top : 6px;
}
#profil{
    position : absolute;
    left : 1300px;
    margin-top : 6px;
}
#sary{
    position : absolute;
    width : 50px;
    height : 50px;
    margin-top:3px;
    margin-left : 320px;
  
}
#notif{
    position : absolute;
left : 1150px;
top : 1px;

}

       </style>
    </head>
   
    <body>
       
    <header>
    <img src="<?php echo base_url('assets/image/logo.PNG'); ?>" alt="carCO" id="logo">
  
    <button class="btn btn-success" id="deco" onclick="versConnecter()" >Déconnection</button>
    <script>
  function versConnecter() {
    window.location.href = "<?php echo base_url('Connecter'); ?>";
  }
</script> 

<?php 
  $count_notif = 0;
?>


<li id="notif" class="nav-item">
                                <div class="dropdown show" style="font-size: 14px;">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Notifications<?php if (!empty($propo)) : ?>
                <span class="badge badge-danger" style="font-size: 10px;"><?php echo count($propo); ?></span>
            <?php endif; ?>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin: 0px;max-height: 300px;overflow: auto;">
                                      <?php foreach ($propo as $pro):?>
                                        <a class="dropdown-item alert alert-danger alert-dismissible shadow-sm bg-light fade show text-dark" style="font-size: 10px;margin-bottom: 5px;" href="<?php ?>">

                                          <button type="button" class="close" data-dismiss="alert">&times;</button>
                                          <p class="text-dark"><i class="fa fa-adn"></i> Les places pour votre publication n° <?php echo $pro->ID_proposition;?> sont complètes</p>

                                        </a>
                                      <?php endforeach;?>
                                   
                                      
                                    </div>
                                </div>
                              <!--<a class="nav-link" href="#" style="font-size: 12px;"><i class="fa fa-bell"></i> </a>-->
                            </li>
            <!-- Autres éléments de votre en-tête ici -->
        </header>


</body>
        