<?php
session_start();
if($_SERVER['REQUEST_URI'] == '/login.php'){
    $_SESSION['me'] = '';
}
$users = [
    'Shaki' => ['password' => 'pwshaki', 
                'age' => '45',
                'gender' => 'femme',
                'orientation' => 'bi',
                'image' => './assets/profile/profile-shakira.jpg',
                'chocolat' => 'Lait',
                'music' => ['Pop','Rock'],
                'description' => 'Mon nom complet est Shakira Isabel Mebarak Ripoll, je suis née le 2 février 1977 à Barranquilla (Colombie), est je suis une auteure-compositrice-interprète colombienne.',
                'message' => 'Waka Waka' ],

    'Tony' => ['password' => 'pwtony', 
                'age' => '53',
                'gender' => 'femme',
                'orientation' => 'bi',
                'image' => './assets/profile/profile-tony.jpg',
                'chocolat' => 'Noir',
                'music' => ['Pop','RnB'],
                'description' => 'Je suis Toni Michele Braxton, née le 7 octobre 1967 à Severn, dans le comté d\'Anne Arundel (Maryland), est je suis une chanteuse, pianiste, musicienne, productrice, actrice, personnalité médiatique et philanthrope américaine',
                'message' => 'Un-Break My Heart' ],  

    'Barbara' => ['password' => 'pwbarbara', 
                'age' => '79',
                'gender' => 'femme',
                'orientation' => 'hétéro',
                'image' => './assets/profile/profile-barbara.jpg',
                'chocolat' => 'Blanc',
                'music' => ['Pop','Classique'],
                'description' => 'Je suis Barbara Streisand, naît le 24 avril 1942 dans le quartier de Brooklyn à New York, au sein d\'une famille juive ashkénaze de la petite bourgeoisie.',
                'message' => 'People who needs people' ],

    'Bruce' => ['password' => 'pwbruce', 
                'age' => '71',
                'gender' => 'homme',
                'orientation' => 'bi',
                'image' => './assets/profile/profile-bruce.jpg',
                'chocolat' => 'Lait',
                'music' => ['Pop','Rock','Classique'],
                'description' => 'Je suis l\'un des artistes les plus populaires aux États-Unis, avec plus de 64 millions d\'albums écoulés, pour un total de plus de 120 millions à travers le monde',
                'message' => 'Born in the U.S.A' ],

    'Will' => ['password' => 'pwwill', 
                'age' => '52',
                'gender' => 'homme',
                'orientation' => 'hétéro',
                'image' => './assets/profile/profile-will.jpg',
                'chocolat' => 'Noir',
                'music' => ['Rap', 'Pop', 'Rock', 'Classique', 'RnB'],
                'description' => 'Je suis l\'un des rares artistes à avoir connu le succès dans trois différents médias de divertissement aux États-Unis et dans le monde : cinéma, télévision et musique.',
                'message' => 'Je suis le prince de Bel Air' ],

    'Bisbal' => ['password' => 'pwbisbal', 
                'age' => '42',
                'gender' => 'homme',
                'orientation' => 'homo',
                'image' => './assets/profile/profile-bisbal.jpg',
                'chocolat' => 'Blanc',
                'music' => ['Pop','Rock'],
                'description' => 'J\'ai quitte assez tôt l\'école parce que je n\'aime pas étudier. J\'ai trouve un travail dans une pépinière. C\'est là que je suis découvert, alors que je travaille en chantant.' ,
                'message' => 'Ave Maria !' ],

    'Justin' => ['password' => 'pwjustin', 
                'age' => '27',
                'gender' => 'homme',
                'orientation' => 'hétéro',
                'image' => './assets/profile/profile-justin.jpg',
                'chocolat' => 'Lait',
                'music' => ['Rap', 'Pop', 'Rock', 'Classique', 'RnB'],
                'description' => 'En 2007, à l\'âge de 13 ans , je suis repéré par  Scooter Braun sur ma chaîne YouTube. L\'année suivante, je signe un contrat avec la maison de disques RBMG Records' ,
                'message' => 'Je suis dingue' ],

    'Bruno' => ['password' => 'pwbruno', 
                'age' => '35',
                'gender' => 'homme',
                'orientation' => 'bi',
                'image' => './assets/profile/profile-bruno.jpg',
                'chocolat' => 'Noir',
                'music' => ['Rap', 'Pop', 'Rock', 'RnB'],
                'description' => 'né le 8 octobre 1985 à Honolulu, dans l\'État de Hawaï.. Mes ancêtres sont d\'origine portoricaine, philippine, juive et espagnole.',
                'message' => 'Ne crois pas, juste regarde' ],

    'Elton' => ['password' => 'pwelton', 
                'age' => '74',
                'gender' => 'homme',
                'orientation' => 'homo',
                'image' => './assets/profile/profile-elton.jpg',
                'chocolat' => 'Blanc',
                'music' => ['Rap', 'Pop', 'Rock', 'Classique', 'RnB'],
                'description' => 'Je suis Sir Elton Hercules John, Icône pop mondiale, en plus de cinquante ans de carrière, avec plus de 300 millions de disques écoulés, est l\'un des artistes ayant vendu le plus de disques' ,
                'message' => 'Ne va pas briser mon cœur' ],

    'Ariana' => ['password' => 'pwariana', 
                'age' => '27',
                'gender' => 'femme',
                'orientation' => 'hétéro',
                'image' => './assets/profile/profile-ariana.jpg',
                'chocolat' => 'Lait',
                'music' => ['Pop','Rock','Classique','RnB'],
                'description' => 'À l\'âge de 10 ans, j\'ai co-fondé un groupe de musique, Kids Who Care, qui a chanté pour de nombreuses associations ; en 2007. J\'ai réussi à récolter 500 000 dollars en chantant en solo',
                'message' => 'Merci, Suivant' ],

    'Ladygaga' => ['password' => 'pwladygaga', 
                'age' => '27',
                'gender' => 'femme',
                'orientation' => 'bi',
                'image' => './assets/profile/profile-gaga.jpg',
                'chocolat' => 'Blanc',
                'music' => ['Rap', 'Pop', 'Rock', 'Classique', 'RnB'],
                'description' => 'Mon surnom de Lady Gaga me l\' a donné mon producteur de musique Rob Fusari, puisque au lieu de le saluer d\'un bonjour, je lui chantait Radio Ga Ga, du groupe Queen.',
                'message' => 'Je veux ta mauvaise romance' ],

    'Maria' => ['password' => 'pwmaria', 
                'age' => '51',
                'gender' => 'femme',
                'orientation' => 'homo',
                'image' => './assets/profile/profile-maria.jpg',
                'chocolat' => 'Noir',
                'music' => ['Pop', 'Rock', 'Classique', 'RnB'],
                'description' => 'Je suis née d\'un père d\'origine afro-américaine et afro-cubaine, et d\'une mère d\'origine irlandaise, professeur de chant et chanteuse d\'opéra.',
                'message' => 'Tout ce que je veux pour noël, c\'est toi' ],




]; // end main tableau 

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = $users;
}


//Création du tableau permettant de contruire la liste déroulante des choix des chocolat 
$chocolateList = ['Noir' => 'Chocolat noir', 'Lait' => 'Chocolat au lait', 'Blanc' => 'Chocolat blanc'];
$musicList = ['Rap', 'Pop', 'Rock', 'Classique', 'RnB', 'Heavy', 'Gothique', 'Blues', 'Jazz', 'Reagea', 'Techno'];
$_SESSION['chocolat'] = $chocolateList;
$_SESSION['music'] = $musicList;
$regexAge = '/^[1-9][0-9]?$/';
define('IMG_FOLDER','assets/profile/');
// On vérifie les updates
if (isset($_POST['update'])){
    //On vérifie le mdp
    $updateErrorList = [];
    if (!empty($_POST['password'])) {
        $pass = htmlspecialchars($_POST['password']);
        if (!(preg_match('@[0-9]@', $pass) && preg_match('@[A-Z]@', $pass) && preg_match('@[a-z]@', $pass) && strlen($pass) > 8)) {
            $updateErrorList['password'] = 'Veuillez créer un mot de passe contenant au moins : une majuscule, une minuscule, un chiffre et 8 caractères';
        }
    } else {
        $updateErrorList['password'] = 'Veuillez créer votre mot de passe';
    }
    //On vérifie que le champ age n'est pas vide
    if (!empty($_POST['age'])) {
        //Qu'il est bien compris entre 18 et 99
        if (preg_match($regexAge, $_POST['age'])) {
            if ($_POST['age'] >= 18) {
                $age = htmlspecialchars($_POST['age']);
            } else {
                $updateErrorList['age'] = 'Vous devez être majeur';
            }
        } else {
            $updateErrorList['age'] = 'Veuillez renseignez correctement votre age';
        }
    } else {
        $updateErrorList['age'] = 'Veuillez renseigner votre age';
    }
    // on vérifie l'orientation
    if (isset($_POST['orientation'])) {
        if ($_POST['orientation'] == 'hétéro' || $_POST['orientation'] == 'homo' || $_POST['orientation'] == 'bi') {
            $orientation = htmlspecialchars($_POST['orientation']);
        } else {
            $updateErrorList['orientation'] = 'Veuillez renseignez correctement votre orientation';
        }
    } else {
        $updateErrorList['orientation'] = 'Veuillez renseignez votre orientation';
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
                $updateErrorList['image'] = 'Ce fichier n\'est pas une image';
            }
        } else {
            $updateErrorList['image'] = 'l\'image est trop lourd ou est mal téléchargé';
        }
    } else {
        $updateErrorList['image'] = 'Veuillez sélectionner votre fichier';
    }
     //On vérifie le chocolat
     if (!empty($_POST['chocolat'])) {
        if (key_exists($_POST['chocolat'], $chocolateList)) {
            $chocolat = htmlspecialchars($_POST['chocolat']);
        } else {
            $updateErrorList['chocolat'] = 'Choisissez correctement votre chocolat préferé';
        }
    } else {
        $updateErrorList['chocolat'] = 'Choisissez votre chocolat préferé';
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
            $updateErrorList['music'] = 'Renseigner correctement votre choix';
        }
    } else {
        $updateErrorList['music'] = 'Choisissez au moins un style de musique';
    }
    // on check la description
    if(!empty($_POST['description'])){
        $description =htmlspecialchars($_POST['description']);
    }else{
        $updateErrorList['description'] = 'Remplir une description';
    }
    // on check la message
    if(!empty($_POST['message'])){
        $message =htmlspecialchars($_POST['message']);
    }else{
        $updateErrorList['message'] = 'Remplir un message';
    }
    // on charge la photo dans le dossier
    if(empty($updateErrorList)){
        move_uploaded_file($tmpFile, IMG_FOLDER . $_FILES['image']['name']);
        $users_tmp = $_SESSION['users'];
        $tmp = ['password' => $pass, 
                            'age' => $age,
                            'gender' => $_SESSION['users'][$_SESSION['me']]['gender'],
                            'orientation' => $orientation,
                            'image' => IMG_FOLDER . $_FILES['image']['name'],
                            'chocolat' => $chocolat,
                            'music' => $music,
                            'description' => $description,
                            'message' => $message ];
                            $users_tmp[$_SESSION['me']] = $tmp;
        $_SESSION['users'] = $users_tmp;
        
        header('Location: http://utando.fr/main.php');
    }
}







//On vérifie que le formulaire a bien été soumis
if (isset($_POST['register'])) {
    $regexName = '/^[A-z\d\-_.À-ú]{5,}$/';
    
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
                header('Location: http://utando.fr/main.php');
            }else{
                $formErrorListLogin = 'Votre pseudo ou votre mot de passe est inexistant';
            }
        } else{
            $formErrorListLogin = 'Votre pseudo ou votre mot de passe est inexistant';
        }
    }
}
