<?php include 'sessions.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="ff" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres</title>

    <!-- favicon  -->
    <link rel="icon" href="assets/img/favicon.jpg" sizes="64x64" />
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css?12345">
</head>
<body>
    <div class="col-md-8 offset-md-2">
            <div class="card-body">
                <h2>PARAMETRES</h2>
                <h2 class="card-title fs-4">Personnaliser votre profil</h2>
                <form action="?" method="POST" enctype="multipart/form-data">
                   
                    <!-- pw -->
                    <fieldset class="mb-3">
                        <label for="password" class="form-label">Nouveau mot de passe: </label>
                        <input type="password" class="form-control <?= !isset($_POST['update']) ? null : (isset($updateErrorList['password']) ? 'is-invalid' : 'is-valid') ?>" id="password" name="password" value="<?= !isset($pass) ? $_SESSION['users'][$_SESSION['me']]['password'] : $pass ?>" />
                        <!-- error-->
                        <?php if (isset($updateErrorList['password'])) { ?>
                            <p><small class="badge bg-danger"><?= $updateErrorList['password'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    <!-- age-->
                    <fieldset class="mb-3">
                        <label for="age" class="form-label">Age : </label>
                        <input type="number" class="form-control <?= !isset($_POST['update']) ? null : (isset($updateErrorList['age']) ? 'is-invalid' : 'is-valid') ?>" id="age" name="age" value="<?= !isset($age) ?$_SESSION['users'][$_SESSION['me']]['age'] : $age ?>" />
                        <!-- error-->
                        <?php if (isset($updateErrorList['age'])) { ?>
                            <p><small class="badge bg-danger"><?= $updateErrorList['age'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                     <!-- description-->
                    <fieldset class="mb-3">
                        <label for="description" class="form-label">Description : </label>
                        <input type="text" class="form-control <?= !isset($_POST['update']) ? null : (isset($updateErrorList['description']) ? 'is-invalid' : 'is-valid') ?>" id="description" name="description" value="<?= !isset($description) ? $_SESSION['users'][$_SESSION['me']]['description'] : $description ?>" />
                        <!-- error-->
                        <?php if (isset($updateErrorList['description'])) { ?>
                            <p><small class="badge bg-danger"><?= $updateErrorList['description'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                     <!-- message-->
                    <fieldset class="mb-3">
                        <label for="message" class="form-label">Message : </label>
                        <input type="text" class="form-control <?= !isset($_POST['update']) ? null : (isset($updateErrorList['message']) ? 'is-invalid' : 'is-valid') ?>" id="message" name="message" value="<?= !isset($message) ? $_SESSION['users'][$_SESSION['me']]['message'] : $message ?>" />
                        <!-- error-->
                        <?php if (isset($updateErrorList['message'])) { ?>
                            <p><small class="badge bg-danger"><?= $updateErrorList['message'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    <!-- Orientation-->
                    <fieldset class="mb-3 col-md-6">
                        <legend>Orientation :</legend>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="orientation1">Hétéro</label>
                            <input class="form-check-input" type="radio" name="orientation" id="orientation1" value="hétéro">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="orientation2">Homo</label>
                            <input class="form-check-input" type="radio" name="orientation" id="orientation2" value="homo">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="orientation3">Bi</label>
                            <input class="form-check-input" type="radio" name="orientation" id="orientation3" value="bi">

                        </div>
                        <!-- error-->
                        <?php if (isset($updateErrorList['orientation'])) { ?>
                            <p><small class="badge bg-danger"><?= $updateErrorList['orientation'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    </div><!-- end row -->
                    <!-- Profil photo-->
                    <fieldset class="mb-3">
                        <legend>Nouvelle photo Profil :</legend>
                        <div class="mb-3">    
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                        <!-- error-->
                        <?php if (isset($updateErrorList['image'])) { ?>
                            <p><small class="badge bg-danger"><?= $updateErrorList['image'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    <!-- choco-->
                    <fieldset class="mb-3">
                        <legend>Modifier ton chocolat ? :</legend>
                        <select class="form-select mb-3 <?= !isset($_POST['update']) ?: (isset($updateErrorList['chocolat']) ? 'is-invalid' : 'is-valid') ?>" name="chocolat">
                            <option selected disabled>Qu'est-ce que tu aimes?</option>
                            <?php
                            foreach ($chocolateList as $key => $value) { ?>
                                <option <?= (isset($chocolat) && $chocolat == $value) ? 'selected' : null ?> value="<?= $key ?>"><?= $value ?></option>
                            <?php } ?>
                        </select>
                        <!-- error-->
                        <?php if (isset($updateErrorList['chocolat'])) { ?>
                            <p><small class="badge bg-danger"><?= $updateErrorList['chocolat'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    <!-- musiques -->
                    <fieldset class="mb-3">
                        <legend>Ta musique :</legend>
                        <?php
                        foreach ($musicList as $value) {
                        ?><div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="music[]" value="<?= $value ?>" id="<?= $value ?>">
                                <label class="form-check-label" for="<?= $value ?>">
                                    <?= $value ?>
                                </label>
                            </div>
                        <?php } ?>
                        <!-- error-->
                        <?php if (isset($updateErrorList['music'])) { ?>
                            <p><small class="badge bg-danger"><?= $updateErrorList['music'] ?></small></p>
                        <?php } ?>
                        </fieldset>
                        <hr>
                        <h2 class="card-title fs-4">Personnaliser votre thème</h2>

                    <div class="mb-3">
                        <button class="btn btn-dark" type="submit" name="update">Modifier</button>
                        <button class="btn btn-dark" type="button" name="update"><a href="./main.php" class="text-white text-decoration-none">Retour</a></button>
                    </div>
                </form>
            </div>
        </div><!-- end bloc Formulaire d'inscription -->
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>