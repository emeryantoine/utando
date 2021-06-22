<?php
session_start();
$users = [
    'Shaki' => ['password' => 'pwshaki', 
                'age' => '45',
                'gender' => 'femme',
                'orientation' => 'bi',
                'image' => './assets/profile/profile-shakira.jpg',
                'chocolat' => 'Lait',
                'music' => ['Pop','Rock'],
                'description' => 'De son nom complet Shakira Isabel Mebarak Ripoll, née le 2 février 1977 à Barranquilla (Colombie), est une auteure-compositrice-interprète colombienne.',
                'message' => 'Waka Waka' ],

    'Tony' => ['password' => 'pwtony', 
                'age' => '53',
                'gender' => 'femme',
                'orientation' => 'bi',
                'image' => './assets/profile/profile-tony.jpg',
                'chocolat' => 'Noir',
                'music' => ['Pop','RnB'],
                'description' => 'Toni Michele Braxton, née le 7 octobre 1967 à Severn, dans le comté d\'Anne Arundel (Maryland), est une chanteuse, pianiste, musicienne, productrice, actrice, personnalité médiatique et philanthrope américaine',
                'message' => 'Un-Break My Heart' ],  

    'Barbara' => ['password' => 'pwbarbara', 
                'age' => '79',
                'gender' => 'femme',
                'orientation' => 'hétéro',
                'image' => './assets/profile/profile-barbara.jpg',
                'chocolat' => 'Blanc',
                'music' => ['Pop','Classique'],
                'description' => 'Barbara Streisand naît le 24 avril 1942 dans le quartier de Brooklyn à New York, au sein d\'une famille juive ashkénaze de la petite bourgeoisie.',
                'message' => 'People who needs people' ],

    'Bruce' => ['password' => 'pwbruce', 
                'age' => '71',
                'gender' => 'homme',
                'orientation' => 'bi',
                'image' => './assets/profile/profile-bruce.jpg',
                'chocolat' => 'Blanc',
                'music' => ['Pop','Rock','Classique'],
                'description' => 'Il est l\'un des artistes les plus populaires aux États-Unis, avec plus de 64 millions d\'albums écoulés, pour un total de plus de 120 millions à travers le monde',
                'message' => 'Born in the U.S.A' ],

    'Will' => ['password' => 'pwwill', 
                'age' => '52',
                'gender' => 'homme',
                'orientation' => 'hétéro',
                'image' => './assets/profile/profile-will.jpg',
                'chocolat' => 'Noir',
                'music' => ['Rap', 'Pop', 'Rock', 'Classique', 'RnB'],
                'description' => 'Il est l\'un des rares artistes à avoir connu le succès dans trois différents médias de divertissement aux États-Unis et dans le monde : cinéma, télévision et musique.' ],

    'Bisbal' => ['password' => 'pwbisbal', 
                'age' => '42',
                'gender' => 'homme',
                'orientation' => 'homo',
                'image' => './assets/profile/profile-bisbal.jpg',
                'chocolat' => 'Blanc',
                'music' => ['Pop','Rock'],
                'description' => 'Bisbal quitte assez tôt l\'école parce qu\'il n\'aime pas étudier. Il trouve un travail dans une pépinière. C\'est là qu\'il est découvert, alors qu\'il travaille en chantant.' ]
]; // end main tableau 

if (empty($_POST)) {
    $_SESSION['users'] = $users;
}

//Création du tableau permettant de contruire la liste déroulante des choix des chocolat 
$chocolateList = ['Noir' => 'chocolat noir', 'Lait' => 'chocolat au lait', 'Blanc' => 'chocolat blanc'];
$musicList = ['Rap', 'Pop', 'Rock', 'Classique', 'RnB'];
$_SESSION['chocolat'] = $chocolateList;
$_SESSION['music'] = $musicList;

define('IMG_FOLDER','assets/profile/');
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
        $formErrorList['music'] = 'Choisissez au moins un style de musique';
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
                            'description' => '',
                            'message' => '' ];
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
                $_SESSION['me']= $login;
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