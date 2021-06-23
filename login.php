<?php include 'sessions.php'; ?>
<!DOCTYPE html>
<?php include 'header.php'; ?>

<!-- content login -->
<main class="container">
    <div class="row mt-5">
        <!-- bloc Connexion -->
        <div class="col-md-4" id="leftSide">
            <img class="img-fluid rounded mx-auto " src="assets/img/utando-choco.jpg" />
            <div class="card-body">
                <h2 class="card-title fs-4 ">Connexion</h2>
                <form action="?" method="POST">
                    <div class="mb-3">
                        <label for="pseudo-login" class="form-label">Pseudo : </label>
                        <input type="text" class="form-control <?= !isset($_POST['Connexion']) ? null : (isset($formErrorListLogin['error']) ? 'is-invalid' : 'is-valid') ?>" id="pseudo-login" name="pseudo-login" value="<?= !isset($pseudo) ? null : $pseudo ?>" />
                        <?php if (isset($formErrorListLogin['error'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorListLogin['error'] ?></small></p>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="password-login" class="form-label">Mot de passe: </label>
                        <input type="password" class="form-control <?= !isset($_POST['Connexion']) ? null : (isset($formErrorListLogin['error']) ? 'is-invalid' : 'is-valid') ?>" id="password-login" name="password-login" value="<?= !isset($pass) ? null : $pass ?>" />
                        <?php if (isset($formErrorListLogin['error'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorListLogin['error'] ?></small></p>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-dark" type="submit" name="Connexion">Se connecter</button>
                    </div>
                </form>
            </div>
        </div><!-- end bloc Connexion -->

        <hr class="d-md-none">
        <!-- bloc Formulaire d'inscription -->
        <div class="col-md-8 ">
            <div class="card-body">
                <h2 class="card-title fs-4">Formulaire d'inscription</h2>
                <form action="?" method="POST" enctype="multipart/form-data">
                    <!-- pseudo -->
                    <fieldset class="mb-3">
                        <label for="pseudo" class="form-label">Pseudo : </label>
                        <input type="text" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['pseudo']) ? 'is-invalid' : 'is-valid') ?>" id="pseudo" name="pseudo" value="<?= !isset($pseudo) ? null : $pseudo ?>" />
                        <!-- error-->
                        <?php if (isset($formErrorList['pseudo'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorList['pseudo'] ?></small></p>
                        <?php } ?>
                    </fieldset>
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

                    <!-- genre-->
                    <div class="row">
                    <fieldset class="mb-3 col-md-6">
                        <legend>Genre :</legend>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="gender1">Homme
                                <input class="form-check-input" type="radio" name="gender" value="homme" id="gender1" <?= (isset($gender) && $gender == 'homme') ?'checked' : '' ?>>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="gender2">Femme
                                <input class="form-check-input" type="radio" name="gender" value="femme" id="gender2" <?= (isset($gender) && $gender == 'femme') ?'checked' : '' ?>>
                            </label>
                        </div>
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
                            <input class="form-check-input" type="radio" name="orientation" id="orientation1" value="hétéro" <?= (isset($orientation) && $orientation == 'hétéro') ?'checked' : '' ?>>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="orientation2">Homo</label>
                            <input class="form-check-input" type="radio" name="orientation" id="orientation2" value="homo" <?= (isset($orientation) && $orientation == 'homo') ?'checked' : '' ?>>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="orientation3">Bi</label>
                            <input class="form-check-input" type="radio" name="orientation" id="orientation3" value="bi" <?= (isset($orientation) && $orientation == 'bi') ?'checked' : '' ?>>

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
                        <?php if (isset($formErrorList['image'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorList['image'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    <!-- choco-->
                    <fieldset class="mb-3">
                        <legend>Ton chocolat :</legend>
                        <select class="form-select mb-3 <?= !isset($_POST['register']) ?: (isset($formErrorList['chocolat']) ? 'is-invalid' : 'is-valid') ?>" name="chocolat">
                            <option <?= (!isset($chocolat)) ? 'selected' : '' ?> disabled>Qu'est-ce que tu aimes?</option>
                            <?php
                            foreach ($chocolateList as $key => $value) { ?>
                                <option <?= (isset($chocolat) && $chocolat == $key) ? 'selected': '' ?> value="<?= $key ?>"><?= $value ?></option>
                            <?php } ?>
                        </select>
                        <!-- error chocolat ?-->
                        <?php if (isset($formErrorList['chocolat'])) { ?>
                            <p><small class="badge bg-danger"><?= $formErrorList['chocolat'] ?></small></p>
                        <?php } ?>
                    </fieldset>
                    <!-- musiques -->
                    <fieldset class="mb-3">
                        <legend>Ta musique :</legend>
                        <?php
                        foreach ($musicList as $value) {
                        ?><div class="form-check form-check-inline">
                                <input <?= (isset($music) && in_array($value,$music)) ? 'checked':'' ?> class="form-check-input" type="checkbox" name="music[]" value="<?= $value ?>" id="<?= $value ?>">
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
</main>

<?php include 'footer.php'; ?>
</body>

</html>