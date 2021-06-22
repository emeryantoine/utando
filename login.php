<?php
session_start();
$users = [
    'demo1' => ['password' => 'azertyuiop', 
                'age' => '45',
                'gender' => 'homme',
                'orientation' => 'homo',
                'image' => './assets/profil/icons8-safety-helmet-30.png',
                'chocolat' => 'Noir',
                'music' => ['Pop','Rap'],
                'description' => '' ],

    'demo2' => ['password' => 'azertyuio', 
                'age' => '45',
                'gender' => 'homme',
                'orientation' => 'homo',
                'image' => './assets/profil/icons8-safety-helmet-30.png',
                'chocolat' => 'Noir',
                'music' => ['Pop','Rap'],
                'description' => '' ]
];
if (empty($_POST)) {
    $_SESSION['users'] = $users;
}

//Création du tableau permettant de contruire la liste déroulante des choix de civilités
$chocolateList = ['Noir' => 'chocolat noir', 'Lait' => 'chocolat au lait', 'Blanc' => 'chocolat blanc'];
$musicList = ['Rap', 'Pop', 'Rock', 'Classique', 'RnB'];
define('IMG_FOLDER','assets/profil/');
//On vérifie que le formulaire a bien été soumis
if (isset($_POST['register'])) {
    $regexName = '/^[A-z\d\-_.À-ú]{5,}$/';
    $regexAge = '/^[1-9][0-9]?$/';
    //Création du tableau d'erreur
    $formErrorList = [];
    //On vérifie que le champ pseudo n'est pas vide
    if (!empty($_POST['pseudo'])) {
        //Qu'il correspond bien à un format valide
        if (preg_match($regexName, $_POST['pseudo'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
        } else {
            $formErrorList['pseudo'] = 'Votre pseudo doit comporter au moins 5 caractères (chiffre, lettre, accent et séparateur : - _ .)';
        }
    } else {
        $formErrorList['pseudo'] = 'Veuillez renseigner votre pseudo';
    }
    //On vérifie le mdp
    if (!empty($_POST['password'])) {
        $pass = htmlspecialchars($_POST['password']);
        if (!(preg_match('@[0-9]@', $pass) && preg_match('@[A-Z]@', $pass) && preg_match('@[a-z]@', $pass) && strlen($pass) > 8)) {
            $formErrorList['password'] = 'Veuillez créer un mot de passe contenant au moins : une majuscule, une minuscule, un chiffre et 8 caractères';
        }
    } else {
        $formErrorList['password'] = 'Veuillez créer votre mot de passe';
    }
    //On vérifie que le champ age n'est pas vide
    if (!empty($_POST['age'])) {
        //Qu'il est bien compris entre 18 et 99
        if (preg_match($regexAge, $_POST['age'])) {
            if ($_POST['age'] >= 18) {
                $age = htmlspecialchars($_POST['age']);
            } else {
                $formErrorList['age'] = 'Vous devez être majeur';
            }
        } else {
            $formErrorList['age'] = 'Veuillez renseignez correctement votre age';
        }
    } else {
        $formErrorList['age'] = 'Veuillez renseigner votre age';
    }
    // on vérifie le genre
    if (isset($_POST['gender'])) {
        if ($_POST['gender'] == 'homme' || $_POST['gender'] == 'femme') {
            $gender = htmlspecialchars($_POST['gender']);
        } else {
            $formErrorList['gender'] = 'Veuillez renseignez correctement votre genre';
        }
    } else {
        $formErrorList['gender'] = 'Veuillez renseignez votre genre';
    }
    // on vérifie l'orientation
    if (isset($_POST['orientation'])) {
        if ($_POST['orientation'] == 'hétéro' || $_POST['orientation'] == 'homo' || $_POST['orientation'] == 'bi') {
            $orientation = htmlspecialchars($_POST['orientation']);
        } else {
            $formErrorList['orientation'] = 'Veuillez renseignez correctement votre orientation';
        }
    } else {
        $formErrorList['orientation'] = 'Veuillez renseignez votre orientation';
    }
    // Verification image choisie 
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        if ($_FILES['image']['size'] <= 1500000) {
            $file = $_FILES['image']['name'];
            $tmpFile = $_FILES['image']['tmp_name'];
            $typeMime = mime_content_type($tmpFile);
            $allowedTypes = [
                'jpeg' => 'image/jpeg',
                'png' => 'image/png',
                'gif' => 'image/gif',
                'jpg' => 'image/jpeg'
            ];
            $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
            if (!in_array($typeMime, $allowedTypes) || !array_key_exists($extension, $allowedTypes)) {
                $formErrors['image'] = 'Ce fichier n\'est pas une image';
            }
        } else {
            $formErrors['image'] = 'l\'image est trop lourd ou est mal téléchargé';
        }
    } else {
        $formErrors['image'] = 'Veuillez sélectionner votre fichier';
    }
    
    //On vérifie le chocolat
    if (!empty($_POST['chocolat'])) {
        if (key_exists($_POST['chocolat'], $chocolateList)) {
            $chocolat = htmlspecialchars($_POST['chocolat']);
        } else {
            $formErrorList['chocolat'] = 'Choisissez correctement votre chocolat préferé';
        }
    } else {
        $formErrorList['chocolat'] = 'Choisissez votre chocolat préferé';
    }
    //ON vérifie le genre musical
    if (isset($_POST['music'])) {
        $valide = true;
        foreach ($_POST['music'] as $value) {
            if (!in_array($value, $musicList)) {
                $valide = false;
                break;
            }
        }
        if ($valide) {
            $music = $_POST['music'];
        } else {
            $formErrorList['music'] = 'Renseigner correctement votre choix';
        }
    } else {
        $formErrorList['music'] = 'Choisissez au moins style de musique';
    }
    // on charge la photo dans le dossier
    if(empty($formErrorList)){
        move_uploaded_file($tmpFile, IMG_FOLDER . $_FILES['image']['name']);
        $users_tmp = $_SESSION['users'];
        $tmp = ['password' => $pass, 
                            'age' => $age,
                            'gender' => $gender,
                            'orientation' => $orientation,
                            'image' => IMG_FOLDER . $_FILES['image']['name'],
                            'chocolat' => $chocolat,
                            'music' => $music,
                            'description' => '' ];
                            $users_tmp[$pseudo] = $tmp;
        $_SESSION['users'] = $users_tmp;

    }

}
if (isset($_POST['Connexion'])) {
    $formErrorListLogin = [];
    if(!empty($_POST['pseudo-login'])){
        $login = htmlspecialchars($_POST['pseudo-login']);
        
    }else{
        $formErrorListLogin['pseudo-login'] = 'Veuillez entrer votre pseudo';
    }

    if(!empty($_POST['password-login'])){
        $passwordLogin = htmlspecialchars($_POST['password-login']);

    }else{
        $formErrorListLogin['password-login'] = 'Veuillez entrer votre mot de passe';
    }
    if ($formErrorListLogin == null) {
        if(key_exists($login,$_SESSION['users'])){
            if ($_SESSION['users'][$login]['password'] == $passwordLogin) {
                echo 'lol================================================';
               header(('Location: http://utando.fr/main.php'));
            }else{
                $formErrorListLogin = 'Votre pseudo ou votre mot de passe est inexistant';
            }
        } else{
            $formErrorListLogin = 'Votre pseudo ou votre mot de passe est inexistant';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-4 offset-1" id="leftSide">
                <img class="img-fluid" src="assets/img/leftSide.jpg" />
                <div class="card-body">
                    <h1 class="card-title h2 mb-5 ">Formulaire d'inscription</h1>
                    <form action="?" method="POST">
                        <div class="mb-3">
                            <label for="pseudo-login" class="form-label">Pseudo : </label>
                            <input type="text" class="form-control <?= !isset($_POST['Connexion']) ? null : (isset($formErrorListLogin['pseudo-login']) ? 'is-invalid' : 'is-valid') ?>" id="pseudo-login" name="pseudo-login" value="<?= !isset($pseudo) ? null : $pseudo ?>" />
                            <?php if (isset($formErrorListLogin['pseudo-login'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorListLogin['pseudo-login'] ?></small></p>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="password-login" class="form-label">Mot de passe: </label>
                            <input type="password" class="form-control <?= !isset($_POST['Connexion']) ? null : (isset($formErrorListLogin['password-login']) ? 'is-invalid' : 'is-valid') ?>" id="password-login" name="password-login" value="<?= !isset($password) ? null : $password ?>" />
                            <?php if (isset($formErrorListLogin['password-login'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorListLogin['password-login'] ?></small></p>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-secondary" type="submit" name="Connexion">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-6 card">
                <div class="card-body">
                    <h1 class="card-title h2 mb-5 ">Formulaire d'inscription</h1>
                    <form action="?" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="pseudo" class="form-label">Pseudo : </label>
                            <input type="text" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['pseudo']) ? 'is-invalid' : 'is-valid') ?>" id="pseudo" name="pseudo" value="<?= !isset($pseudo) ? null : $pseudo ?>" />
                            <?php if (isset($formErrorList['pseudo'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorList['pseudo'] ?></small></p>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe: </label>
                            <input type="password" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['password']) ? 'is-invalid' : 'is-valid') ?>" id="password" name="password" value="<?= !isset($pass) ? null : $pass ?>" />
                            <?php if (isset($formErrorList['password'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorList['password'] ?></small></p>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age : </label>
                            <input type="number" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['age']) ? 'is-invalid' : 'is-valid') ?>" id="age" name="age" value="<?= !isset($age) ? null : $age ?>" />
                            <?php if (isset($formErrorList['age'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorList['age'] ?></small></p>
                            <?php } ?>
                        </div>
                        <div class="mb-3">
                            <label for="">genre</label>
                            <input class="form-check-input" type="radio" name="gender" value="homme" id="gender1">
                            <label class="form-check-label" for="gender1">
                                Homme
                            </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" value="femme" id="gender2">
                                <label class="form-check-label" for="gender2">
                                    Femme
                                </label>
                            </div>
                            <?php if (isset($formErrorList['gender'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorList['gender'] ?></small></p>
                            <?php } ?>
                            <div class="mb-3">
                                <label for="">orientation</label>
                                <input class="form-check-input" type="radio" name="orientation" id="orientation1" value="hétéro">
                                <label class="form-check-label" for="orientation1">
                                    Hétéro
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orientation" id="orientation2" value="homo">
                                <label class="form-check-label" for="orientation2">
                                    Homo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="orientation" id="orientation3" value="bi">
                                <label class="form-check-label" for="orientation3">
                                    Bi
                                </label>
                            </div>
                            <?php if (isset($formErrorList['orientation'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorList['orientation'] ?></small></p>
                            <?php } ?>
                            <div class="mb-3">
                                <label for="image" class="form-label">Profil photo</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <select class="form-select mb-3 <?= !isset($_POST['register']) ?: (isset($formErrorList['chocolat']) ? 'is-invalid' : 'is-valid') ?>" name="chocolat">
                                <option selected disabled>Qu'est-ce que tu aimes?</option>
                                <?php
                                foreach ($chocolateList as $key => $value) { ?>
                                    <option <?= (isset($chocolat) && $chocolat == $value) ? 'selected' : null ?> value="<?= $key ?>"><?= $value ?></option>
                                <?php } ?>
                            </select>
                            <div>
                                <p>Goût musical:</p>
                                <?php
                                foreach ($musicList as $value) {
                                ?><div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="music[]" value="<?= $value ?>" id="<?= $value ?>">
                                        <label class="form-check-label" for="<?= $value ?>">
                                            <?= $value ?>
                                        </label>
                                    </div>
                                <?php } ?>
                                <?php if (isset($formErrorList['music'])) { ?>
                                    <p><small class="badge bg-danger"><?= $formErrorList['music'] ?></small></p>
                                <?php } ?>
                            </div>

                            <div class="mb-3">
                                <button class="btn btn-secondary" type="submit" name="register">S'enregistrer</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>