<?php include 'sessions.php'; ?>
<?php include 'header.php'; ?>

<!-- content login -->
    <main class="container">
        <div class="row mt-5">
            <!-- bloc Connexion -->
            <div class="col-md-4 offset-1" id="leftSide">
            <img class="img-fluid rounded" src="assets/img/utando-choco.jpg" />
                <div class="card-body">
                    <h2 class="card-title fs-4 ">Connexion</h2>
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
                            <button class="btn btn-dark" type="submit" name="Connexion">Se connecter</button>
                        </div>
                    </form>
                </div>
            </div><!-- end bloc Connexion -->
            <!-- bloc Formulaire d'inscription -->
            <div class="col-md-8 ">
                <div class="card-body">
                    <h2 class="card-title fs-4">Formulaire d'inscription</h2>
                    <form action="?" method="POST" enctype="multipart/form-data">
                        <!-- pseudo -->
                        <fieldset class="mb-3">
                            <label for="pseudo" class="form-label">Pseudo : </label>
                            <input type="text" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['pseudo']) ? 'is-invalid' : 'is-valid') ?>" id="pseudo" name="pseudo" value="<?= !isset($pseudo) ? null : $pseudo ?>" />
                            <?php if (isset($formErrorList['pseudo'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorList['pseudo'] ?></small></p>
                            <?php } ?>
                        </fieldset>
                        <!-- pw -->
                        <fieldset class="mb-3">
                            <label for="password" class="form-label">Mot de passe: </label>
                            <input type="password" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['password']) ? 'is-invalid' : 'is-valid') ?>" id="password" name="password" value="<?= !isset($pass) ? null : $pass ?>" />
                            <?php if (isset($formErrorList['password'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorList['password'] ?></small></p>
                            <?php } ?>
                        </fieldset>
                        <!-- age-->
                        <fieldset class="mb-3">
                            <label for="age" class="form-label">Age : </label>
                            <input type="number" class="form-control <?= !isset($_POST['register']) ? null : (isset($formErrorList['age']) ? 'is-invalid' : 'is-valid') ?>" id="age" name="age" value="<?= !isset($age) ? null : $age ?>" />
                            <?php if (isset($formErrorList['age'])) { ?>
                                <p><small class="badge bg-danger"><?= $formErrorList['age'] ?></small></p>
                            <?php } ?>
                        </fieldset>
                        <!-- genre-->

                        <fieldset class="mb-3">
                                <label for="gender" class="form-label">Genre : </label>
                                <fieldset>
                                    <label class="form-check-label" for="gender1">Homme
                                    <input class="form-check-input" type="radio" name="gender" value="homme" id="gender1">
                                    </label>
                                    
                                    <label class="form-check-label" for="gender2">Femme
                                    <input class="form-check-input" type="radio" name="gender" value="femme" id="gender2">
                                    </label>
                                </fieldset>
                        </fieldset>                                                   
                            
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