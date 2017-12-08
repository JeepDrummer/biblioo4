<?php require 'header.php'; ?>

        <nav class="navbar navbar-expand-lg navbar-dark orange darken-3">
            <a class="navbar-brand" href="#">Bibliothèque</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>
            <li class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Tri</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Titre</a>
                            <a class="dropdown-item" href="#">Auteur</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Type</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Livre</a>
                            <a class="dropdown-item" href="#">Revue</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Catégories</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Développement web</a>
                            <a class="dropdown-item" href="#">Gestion de projet</a>
                            <a class="dropdown-item" href="#">Infographie</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <input class="nav-item-box" type="checkbox" aria-label="Checkbox for following text input">
                    </li>
                    <li class="nav-item">
                        <span class="nav-link">Disponibles</span>
                    </li>
                </ul>
            </li>
        </nav>
    <main role="main" class="container">

        <table class="table table-stripped w-0">
            <thead>
            <tr>
                <th>Couverture</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Titre</th>
                <th>Année</th>
                <th>Catégorie</th>
                <th>Réservation</th>
                <th>Administration</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><img src="/web/assets/uploads/books/multimedia-droit.jpg" class="img-fluid" alt=""></td>
                <td>Multimédia et droit</td>
                <td>Alain Bensoussan</td>
                <td>1998</td>
                <td>Droit</td>
                <td><a href="#" class="btn btn-primary btn-deep-orange">Réserver</a></td>
                <td><select id="select">
                        <option value="valeur0">Disponible</option>
                        <option value="valeur1">Réservé</option>
                        <option value="valeur2" selected>Emprunté</option>
                        <option value="valeur3">Indisponible</option>
                    </select><button class="btn orange btn-sm">Editer</button></td>
            </tr>
            <tr>
                <td><img src="/web/assets/uploads/books/multimedia-droit.jpg" class="img-fluid" alt=""></td>
                <td>Multimédia et droit</td>
                <td>Alain Bensoussan</td>
                <td>1998</td>
                <td>Droit</td>
                <td><a href="#" class="btn disabled btn-primary btn-deep-orange">Réserver</a></td>
                <td><select id="select">
                        <option value="valeur0">Disponible</option>
                        <option value="valeur1">Réservé</option>
                        <option value="valeur2" selected>Emprunté</option>
                        <option value="valeur3">Indisponible</option>
                    </select><button class="btn orange btn-sm">Editer</button></td>
            </tr>
            <tr>
                <td><img src="/web/assets/uploads/books/multimedia-droit.jpg" class="img-fluid" alt=""></td>
                <td>Multimédia et droit</td>
                <td>Alain Bensoussan</td>
                <td>1998</td>
                <td>Droit</td>
                <td><a href="#" class="btn btn-primary btn-deep-orange">Réserver</a></td>
                <td><select id="select">
                        <option value="valeur0">Disponible</option>
                        <option value="valeur1">Réservé</option>
                        <option value="valeur2" selected>Emprunté</option>
                        <option value="valeur3">Indisponible</option>
                    </select><button class="btn orange btn-sm">Editer</button></td>
            </tr>
            </tbody>
        </table>
        <!--Pagination amber-->
        <nav>
            <ul class="pagination pg-amber">
                <!--Arrow left-->
                <li class="page-item">
                    <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>

                <!--Numbers-->
                <li class="page-item active"><a class="page-link">1</a></li>
                <li class="page-item"><a class="page-link">2</a></li>
                <li class="page-item"><a class="page-link">3</a></li>
                <li class="page-item"><a class="page-link">4</a></li>
                <li class="page-item"><a class="page-link">5</a></li>

                <!--Arrow right-->
                <li class="page-item">
                    <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

    </main>
<?php require 'footer.php'; ?>