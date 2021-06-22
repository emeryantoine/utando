<?php 
session_start();

?>

<?php include 'header.php'; ?>
<main class="container">

    <!-- 3 blocs -->
    <div class="d-flex flex-wrap text-center">
        <!-- Infos personne -->
        <div class="infos-profile text-start order-3 order-md-1 p-2 col-md-4 ">
            <h2 class="fs-5 font-weight">Informations du profil</h2>
            <p class="fs-4 pb-6">Prénom Nom</p>
            <p class="fs-4 pb-6">Femme, 40 ans</p>
            <h3 class="fs-5 font-weight">Qui suis-je?</h3>
            <p class="fs-6 ">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. </p>
            <h3 class="fs-5 font-weight">La musique que j'aime</h3>
            <p class="fs-6 ">POP, LATINO </p>
            <h3 class="fs-5 font-weight">Mon chocolat</h3>
            <p class="fs-6 ">Noir 100%</p>
            <!-- box infos -->
            <div class="">

            </div>


        </div><!-- end Infos personne -->

        <!-- Photo + msg + afinités -->
        <div class="order-1 order-md-2 p-2 col-md-6">
            <!-- photo -->
            <div class="profile">
                
                <div class="mt-3"><!-- photo -->
                    <img style=" border-radius: 50%;" class="img-fluid rounded-circle shadow-lg border-light border border-5" src="assets/profile/profile-shakira.jpg" alt="Photos">
                </div>
                <div class="mt-3"><!-- message -->
                    <h2 class="fs-5">Waka Waka !</h2>
                </div>
                <div class="mt-3"><!-- correspondance -->
                    <h2 class="fs-5">100% de correspondance avec ton profil</h2>
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
                        <a title="Je te donne une fraise" href="#">
                            <img class="img-fluid" src="assets/img/picto1.png" alt="Fraise">
                        </a>
                    </div><!-- end Picto fraise -->

                    <!-- Picto Supprimer -->
                    <div class="picto col-md-12 col-4 mt-3">
                        <a title="Je n'aime pas" href="#">
                            <img class="img-fluid" src="assets/img/picto2.png" alt="Supprimer">
                        </a>
                    </div><!-- end Picto Supprimer -->

                    <!-- Picto Super -->
                    <div class="picto col-md-12 col-4 mt-3">
                        <a title="Tu est super!" href="#">
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