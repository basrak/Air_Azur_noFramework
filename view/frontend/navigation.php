
<?php ob_start(); ?>



<div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#"><img src="http://localhost/Air_Azur/img/logo.png" data-active-url="http://localhost/Air_Azur/img/logo-active.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="agence.php?action=accueil"><h5>Accueil</h5></a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="agence.php?action=vol"><h5>Liste des Vols</h5></a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="agence.php?action=reservation"><h5>Réservations</h5></a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="agence.php?action=client"><h5>Liste des Clients</h5></a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="agence.php?action=deconnexion"><h5>Se deconnecter</h5></a></li>
            
        </ul>
    </div>
</div>



<?php $nav = ob_get_clean(); ?>