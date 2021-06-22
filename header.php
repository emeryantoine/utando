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
    <link rel="stylesheet" href="assets/css/style.css?1234567">

</head>

<body>

    <!-- header -->
    <header class=" text-center position-relative">
        <div class="logo">
            <a class="" href="main.php"><img class="img-fluid m-auto" src="assets/img/logo.png" alt="Utando Chocolat"></a>
        </div>
        <?php if (!empty($_SESSION['me'])) {  ?>
        <!-- menu connexion-->
        <nav>
            <ul class="top-menu position-absolute">
                <li class="p-6 inline-block"> <a title="Desconnexion" href="login.php">
                    <img class="img-fluid" src="assets/img/on.png" alt="Connexion"></a>
                </li>
                <li class="p-6 inline-block"> <a title="Paramètres du compte" href="param.php">
                        <img class="img-fluid" src="assets/img/config.png" alt="Paramètres"></a>
                </li>
            </ul>
        </nav>
        <!-- notre photo profil-->
        <div class="photo-me">
            <img class="img-fluid rounded-circle  border-light border border-1" src="<?= $_SESSION['users'][$_SESSION['me']]['image'] ?>" alt="Connexion"></a>
        </div>
        <?php } ?>
    
        <h1 class="m-0 p-6 fs-5 text-center ">Un site de rencontres avec chocolat et fraises</h1>
    </header><!-- end header -->