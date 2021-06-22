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
                <h2 class="card-title fs-4">Personnaliser vos paramètres</h2>
                <form action="?" method="POST" enctype="multipart/form-data">
                   
                    <!-- pw -->
                    <fieldset class="mb-3">
                        <label for="password" class="form-label">Mot de passe: </label>
                        <input type="password" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['password']) ? 'is-invalid' : 'is-valid') ?>" id="password" name="password" value="<?= !isset($pass) ? null : $pass ?>" />
                        <!-- error-->
                        <?php if (isset($formErrorList['password'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorList['password'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    <!-- age-->
                    <fieldset class="mb-3">
                        <label for="age" class="form-label">Age : </label>
                        <input type="number" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['age']) ? 'is-invalid' : 'is-valid') ?>" id="age" name="age" value="<?= !isset($age) ? null : $age ?>" />
                        <!-- error-->
                        <?php if (isset($formErrorList['age'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorList['age'] ?></small></p>
                        <?php } ?>
                    </fieldset>

                        <!-- error-->
                        <?php if (isset($formErrorList['gender'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorList['gender'] ?></small></p>
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
                        <?php if (isset($formErrorList['orientation'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorList['orientation'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    </div><!-- end row -->
                    <!-- Profil photo-->
                    <fieldset class="mb-3">
                        <legend>Photo Profil :</legend>
                        <div class="mb-3">    
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                        <!-- error img ?-->
                    </fieldset>
                    <!-- choco-->
                    <fieldset class="mb-3">
                        <legend>Ton chocolat :</legend>
                        <select class="form-select mb-3 <?= !isset($_POST['register']) ?: (isset($formErrorList['chocolat']) ? 'is-invalid' : 'is-valid') ?>" name="chocolat">
                            <option selected disabled>Qu'est-ce que tu aimes?</option>
                            <?php
                            foreach ($chocolateList as $key => $value) { ?>
                                <option <?= (isset($chocolat) && $chocolat == $value) ? 'selected' : null ?> value="<?= $key ?>"><?= $value ?></option>
                            <?php } ?>
                        </select>
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
                        <?php if (isset($formErrorList['music'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorList['music'] ?></small></p>
                        <?php } ?>
                        </fieldset>

                    <div class="mb-3">
                        <button class="btn btn-dark" type="submit" name="register">S'enregistrer</button>
                    </div>
                </form>
            </div>
        </div><!-- end bloc Formulaire d'inscription -->
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>