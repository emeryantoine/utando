<?php

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- CSS bootstrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Utando chocolat - Site de rencontres</title>
    
    <!-- favicon  -->
    <link rel="icon" href="assets/img/favicon.jpg" sizes="64x64" />
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- header -->
	<header class="navigation">
	<nav class="navbar navbar-expand-lg navbar-dark ">
		<div class="container">
		  <a class="navbar-brand justify-content-start " title="Page d'accueil"  href="main.php"><img class="logo" src="assets/img/logo-utando.jpg" alt="Utando chocolat"></a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
			<ul class="navbar-nav"  >			  
			  <li class="nav-item p-2">

				<a title="Desconnexion" href="login.php" class="nav-link" >
                    <img src="assets/img/on.png" alt="Connexion" ></a>
			  </li>
			  <li class="nav-item p-2">
              <a title="Paramètres du compte" href="login.php" class="nav-link" >
                    <img src="assets/img/config.png" alt="Paramètres" ></a>
			  </li>
			  
			</ul>
            
		  </div>
		</div>
	  </nav>
      <h1 class="container" >Un site de rencontres avec chocolat et fraises</h1>
	  </header><!-- end header -->
      
      

    <main class="container">

        <!-- 3 blocs -->
        <div class="d-flex flex-wrap text-center">
            <!-- Infos personne -->
            <div class="infos-profile text-start order-3 order-md-1 p-2 col-md-4 ">
                <h2 class="fs-5 font-weight">Informations du profil</h2>
                <p class="fs-3 pb-6">Prénom Nom</p>
                <p class="fs-3 pb-6">Femme, 40 ans</p>
                <h3 class="fs-5 font-weight">Qui suis-je?</h3>
                <p class="fs-6 ">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
                <h3 class="fs-5 font-weight">La musique que j'aime</h3>
                <p class="fs-6 ">POP, LATINO </p>
                <h3 class="fs-5 font-weight">Mon chocolat</h3>
                <p class="fs-6 ">Noir 100%</p>
                <!-- box infos -->
                <div class="">

                </div>


            </div><!-- end Infos personne -->

            <!-- Photo + msg + afinités -->
            <div class="order-1 order-md-2 p-2 col-md-4">
                <!-- photo -->
                <div class="profile">
                    <img class="img-fluid" src="assets/profile/profile-shakira.jpg" alt="Photos">
                </div> <!-- end Photo + msg + afinités -->
            </div>
            <!-- Pictos -->
            <div class="order-2 order-md-3 p-2 col-md-4 text-center">

                <!-- liste pictos -->
                <div class="content">
                <div class="row">
                
                    <!-- Picto fraise -->
                    <div class="picto col-md-12 col-4">
                        <a title="Donne-moi une fraise" href="#">
                            <img class="img-fluid" src="assets/img/picto1.png" alt="Fraise">
                        </a>
                    </div><!-- end Picto fraise -->

                     <!-- Picto Supprimer -->
                     <div class="picto col-md-12 col-4">
                        <a title="Je n'aime pas" href="#">
                            <img class="img-fluid" src="assets/img/picto2.png" alt="Supprimer">
                        </a>
                    </div><!-- end Picto Supprimer -->

                     <!-- Picto Super -->
                     <div class="picto col-md-12 col-4">
                        <a title="Tu est super!" href="#">
                            <img class="img-fluid" src="assets/img/picto3.png" alt="Super">
                        </a>
                    </div><!-- end Picto fraise -->
                </div>
                </div>
                
            </div> <!-- end Pictos -->
        </div>

    
    </main>



    <footer class="clearfix text-center bg-dark p-4">

    Application pour toutes les âges. 
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>