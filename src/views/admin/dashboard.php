<?php require 'header.php'; ?>

<main role="main" class="container">

<table class="table w-0">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>E-mail</th>
        <th>Titre</th>
        <th>Date de fin</th>
        <th>J+</th>
        <th>Disponibilité</th>
    </tr>
    </thead>
    <tbody>
    <tr class="table-success">
        <td>Otto</td>
        <td>Mark</td>
        <td>Mark.Otto@gmail.com</td>
        <td>La Bible</td>
        <td>00/00/00</td>
        <td>-5</td>
        <td><select id="select">
                <option value="valeur0">Disponible</option>
                <option value="valeur1">Réservé</option>
                <option value="valeur2" selected>Emprunté</option>
                <option value="valeur3">Indisponible</option>
            </select><button class="btn orange btn-sm">Editer</button></td>
    </tr>
    <tr class="table-warning">
        <td>Thornton</td>
        <td>Jacob</td>
        <td>Jacob.Thornton@gmail.com</td>
        <td>La Bible</td>
        <td>00/00/00</td>
        <td>0</td>
        <td><select id="select">
                <option value="valeur0">Disponible</option>
                <option value="valeur1">Réservé</option>
                <option value="valeur2" selected>Emprunté</option>
                <option value="valeur3">Indisponible</option>
            </select><button class="btn orange btn-sm">Editer</button></td>
    </tr>
    <tr class="table-danger">
        <td>the Bird</td>
        <td>Larry</td>
        <td>Larry.theBird@gmail.com</td>
        <td>La Bible</td>
        <td>00/00/00</td>
        <td>+5</td>
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
<!--/Pagination amber-->
</main>

<?php require 'footer.php'; ?>
