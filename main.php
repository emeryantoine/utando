<?php

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" cogntent="width=device-width, initial-scale=1.0">
    <!-- CSS bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Titre du site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- favicon  -->
    <link rel="icon" href="assets/img/favicon.jpg" sizes="64x64" />
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <header class=" text-center">
        <a class="p-2 m-auto" href="http://"> <img src="assets/img/logo-utando.jpg" alt="Utando Chocolat"  > </a>
        <h1>Un site de rencontres avec chocolat et fraises</h1>
    </header>

    <main class="container">

        <!-- 3 blocs -->
        <div class="d-flex flex-wrap text-center">
            <!-- Infos personne -->
            <div class="order-3 order-md-1 p-2 col-md-4 ">
                Infos personne 
            </div><!-- end Infos personne -->
            
            <!-- Photo + msg + afinités -->
            <div class="order-1 order-md-2 p-2 col-md-4">
                <!-- photo -->
                <div class="profile">
                    <img src="assets/profile/profile-shakira.jpg" alt="Photos">
                </div> <!-- end Photo + msg + afinités -->
            </div>
            <!-- Pictos -->
            <div class="order-2 order-md-3 p-2 col-md-4">

                <!-- liste pictos -->
                <div class="row">
                
                    <!-- Picto fraise -->
                    <div class="picto col-md-12 col-4">
                        <a title="Donne-moi une fraise" href="#">
                            <img src="assets/img/picto1.png" alt="Fraise">
                        </a>
                    </div><!-- end Picto fraise -->

                     <!-- Picto Supprimer -->
                     <div class="picto col-md-12 col-4">
                        <a title="Je n'aime pas" href="#">
                            <img src="assets/img/picto2.png" alt="Supprimer">
                        </a>
                    </div><!-- end Picto Supprimer -->

                     <!-- Picto Super -->
                     <div class="picto col-md-12 col-4">
                        <a title="Tu est super!" href="#">
                            <img src="assets/img/picto3.png" alt="Super">
                        </a>
                    </div><!-- end Picto fraise -->
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