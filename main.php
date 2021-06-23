<?php 
session_start();
$me = $_SESSION['me'];
$myProfil = $_SESSION['users'][$me];
// $randomKey = array_rand($_SESSION['users']);
// var_dump($randomKey);

function finder(){
    global $myProfil;
    global $me;
    $randomKey = array_rand($_SESSION['users']);
    $condition = false;
    do {
        $condition =false;
        $randomKey = array_rand($_SESSION['users']);
        if ($randomKey == $me) {
            $condition = true;
            continue;
        }
        if($myProfil['gender'] == 'homme'){
            if($myProfil['orientation'] == 'hétéro' && $_SESSION['users'][$randomKey]['gender']== 'homme'){
                $condition= true;
            }
            if($myProfil['orientation'] == 'homo' && $_SESSION['users'][$randomKey]['gender']== 'femme'){
                $condition= true;
            }
        }
        if($myProfil['gender'] == 'femme'){
            if($myProfil['orientation'] == 'hétéro' && $_SESSION['users'][$randomKey]['gender']== 'femme'){
                $condition= true;
            }
            if($myProfil['orientation'] == 'homo' && $_SESSION['users'][$randomKey]['gender']== 'homme'){
                $condition= true;
            }
        }
    } while ($condition);
    return $randomKey;
}
$matchPseudo = finder();
$matchInfo = $_SESSION['users'][$matchPseudo];

function compatibility(){
    global $myProfil;
    global $matchInfo;

    $rate= 50;
    if($myProfil['chocolat'] == $matchInfo['chocolat']){
        $rate += 20;
    }
    foreach ($myProfil['music'] as $value) {
        
        if(in_array($value,$matchInfo['music'])){
            $rate +=rand(5,7);
        }
    }
    return ($rate < 100) ? $rate : 100; 

}
?>

<?php include 'header.php'; ?>
<main class="container">

    <!-- 3 blocs -->
    <div class="d-flex flex-wrap text-center">
        <!-- Infos personne -->
        <div class="infos-profile text-start order-3 order-md-1 p-2 col-md-4 ">
            <h2 class="fs-5 font-weight">Informations du profil</h2>
            <p class="fs-4 pb-6"><?= $matchPseudo ?></p>
            <p class="fs-4 pb-6"><?= $matchInfo['gender'] ?>, <?= $matchInfo['age'] ?> ans</p>
            <h3 class="fs-5 font-weight">Qui suis-je?</h3>
            <p class="fs-6 "><?= ($matchInfo['description'])? $matchInfo['description'] : ' La muse de l\'inspiration est morte' ?></p>
            <h3 class="fs-5 font-weight">La musique que j'aime</h3>
            <p class="fs-6 ">
                <?php 
                    foreach ($matchInfo['music'] as $value) {
                        echo $value; ?> <?php } ?> 
            </p>
            <h3 class="fs-5 font-weight">Mon chocolat</h3>
            <p class="fs-6 "><?= $_SESSION['chocolat'][$matchInfo['chocolat']] ?></p>
            <!-- box infos -->
            <div class="">

            </div>


        </div><!-- end Infos personne -->

        <!-- Photo + msg + afinités -->
        <div class="order-1 order-md-2 p-2 col-md-6">
            <!-- photo -->
            <div class="profile">
                
                <div class="mt-3"><!-- photo -->
                    <img style=" border-radius: 50%;" class="img-fluid rounded-circle shadow-lg border-light border border-5" src="<?= $matchInfo['image'] ?>" alt="Photos">
                </div>
                <div class="mt-3"><!-- message -->
                    <h2 class="fs-5"><?= ($matchInfo['message'])?($matchInfo['message']) : 'Message vide' ?></h2>
                </div>
                <div class="mt-3"><!-- correspondance -->
                    <h2 class="fs-5"><?= compatibility() ?>% de correspondance avec ton profil</h2>
                </div>
            </div> <!-- end Photo + msg + afinités -->
        </div>
        <!--  Boutons action  -->
        <div class="order-2 order-md-3 p-2 col-md-2 text-center actions">

            <!-- liste pictos -->
            <div class="content">
                <div class="row mt-5 mb-5">

                    <!-- Picto fraise -->
                    <div class="picto col-md-12 col-4 mt-3">
                        <a title="Je te donne une fraise" href="?">
                            <img class="img-fluid" src="assets/img/picto1.png" alt="Fraise">
                        </a>
                    </div><!-- end Picto fraise -->

                    <!-- Picto Supprimer -->
                    <div class="picto col-md-12 col-4 mt-3">
                        <a title="Je n'aime pas" href="?">
                            <img class="img-fluid" src="assets/img/picto2.png" alt="Supprimer">
                        </a>
                    </div><!-- end Picto Supprimer -->

                    <!-- Picto Super -->
                    <div class="picto col-md-12 col-4 mt-3">
                        <a title="Tu est super!" href="?">
                            <img class="img-fluid" src="assets/img/picto3.png" alt="Super">
                        </a>
                    </div><!-- end Picto fraise -->
                </div>
            </div>

        </div> <!-- end Pictos -->
    </div><!-- end 3 bloc -->


</main>
<?php include 'footer.php'; ?>
</body>
</html>