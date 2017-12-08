<?php require 'header.php';?>
    <main role="main" class="container">
        <!-- Form register -->
        <form>
            <p class="h5 text-center mb-4">Nouveau livre</p>
            <!--Checkbox butons-->
            <div>

                <label>
                    <input class="btn"type="radio" name="type" checked>Livre
                </label>

                <label>
                    <input class="btn" type="radio" name="type"> Revue
                </label>
            </div>
            <!--Checkbox butons-->
            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="text" id="orangeForm-title" class="form-control">
                <label for="orangeForm-title">Titre</label>
            </div>

            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="text" id="orangeForm-author" class="form-control">
                <label for="orangeForm-author">Auteur</label>
            </div>
            <div>
                <select id="select-year">
                    <option value="" disabled selected>Année</option>
                    <option value="valeur0"></option>
                </select>


                <select id="select-month">
                    <option value="" disabled selected>Mois</option>
                    <option value="valeur1">Janvier</option>
                    <option value="valeur2">Février</option>
                    <option value="valeur3">Mars</option>
                    <option value="valeur4">Avril</option>
                    <option value="valeur5">Mai</option>
                    <option value="valeur6">Juin</option>
                    <option value="valeur7">Juillet</option>
                    <option value="valeur8">Août</option>
                    <option value="valeur9">Septembre</option>
                    <option value="valeur10">Octobre</option>
                    <option value="valeur11">Novembre</option>
                    <option value="valeur12">Décembre</option>
                </select>
            </div>
            <br>
            <div>
                <select id="select-category">
                    <option value="" disabled selected>Catégorie</option>
                    <option value="valeur0">Langage</option>
                    <option value="valeur1">BDD</option>
                    <option value="valeur2">Sécurité</option>
                    <option value="valeur3">Web</option>
                </select>
            </div>

            <div class="md-form">
                <i class="prefix grey-text"></i>
                <input type="text" id="orangeForm-theme" class="form-control">
                <label for="orangeForm-theme">Thème</label>
            </div>

            <div class="btn btn-deep-orange btn-primary btn-sm">
                <span>Choose file</span>
                <input type="file">
            </div>

            <div class="text-center">
                <button class="btn btn-deep-orange">Valider</button>
            </div>

        </form>
        <!-- Form register -->
    </main>

<?php require 'footer.php'; ?>