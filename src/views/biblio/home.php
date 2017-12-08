<?php require 'header.php'; ?>

<main role="main" class="container">
    <div class="mt-1">
        <h2>Derniers ajouts</h2>
        <div class="d-flex justify-content-center p-2 flex-wrap">
            <!-- new books loop -->
            <div class="card">
                <div class="view overlay hm-white-slight">
                    <img src="./../web/assets/uploads/books/multimedia-droit.jpg" class="img-fluid" alt="">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Multimédia et droit</h4>
                    <p class="card-text">
                    <ul>
                        <li>Auteur : Alain Bensoussan</li>
                        <li>Année : 1998</li>
                        <li><a href="https://www.eyrolles.com/Droit/Livre/le-multimedia-et-le-droit-memento-guide-2-ed-9782866016630">Plus d'infos</a></li>
                        <li>Catégorie : Droit</li>
                    </ul>
                    </p>
                    <a href="#" class="btn btn-primary btn-deep-orange">Réserver</a>
                </div>
            </div>
            <!-- end new books loop -->
        </div>
    </div>

    <div class="mt-1">
        <h2>Ouvrages les plus réservés</h2>
        <div class="d-flex justify-content-center p-2 flex-wrap">
            <!-- most reserved books loop -->
            <div class="card">
                <div class="view overlay hm-white-slight">
                    <img src="/web/assets/uploads/books/multimedia-droit.jpg" class="img-fluid" alt="">
                    <a href="#">
                        <div class="mask"></div>
                    </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Multimédia et droit</h4>
                    <p class="card-text">
                    <ul>
                        <li>Auteur : Alain Bensoussan</li>
                        <li>Année : 1998</li>
                        <li><a href="https://www.eyrolles.com/Droit/Livre/le-multimedia-et-le-droit-memento-guide-2-ed-9782866016630">Plus d'infos</a></li>
                        <li>Catégorie : Droit</li>
                    </ul>
                    </p>
                    <a href="#" class="btn btn-primary btn-deep-orange">Réserver</a>
                </div>
            </div>
            <!-- end most reserved books loop -->
        </div>
    </div>
    <div class="mt-1 text-center">
        <button type="button" class="btn btn-outline-warning waves-effect">Voir tous les ouvrages</button>
    </div>


</main>

<?php require 'footer.php'; ?>
