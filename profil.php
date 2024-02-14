<?php include('header.php'); ?>

    <!-- profile section -->
    <section class="job_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    
                    <div class="profile-container">
                        <div class="tabs">
                            <div class="tab" onclick="showTab('etablissement-info')">Infos Établissement</div>
                            <div class="tab" onclick="showTab('personal-info')">Infos Personnelles</div>
                            <div class="tab" onclick="showTab('etudiant-list')">Liste des Élèves</div>
                        </div>

                        <!-- Formulaire pour les Infos Établissement -->
                        <div class="tab-content hidden" id="etablissement-info">
                            <div class="form-container">
                                <h2>Informations de l'Établissement</h2>
                                <form action="update_etablissement_info.php" method="post">
                                    <div class="form-group">
                                        <label for="etablissement-nom">Nom de l'établissement:</label>
                                        <input type="text" id="etablissement-nom" name="etablissement-nom" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="etablissement-addresse">Adresse de l'établissement:</label>
                                        <input type="text" id="etablissement-addresse" name="etablissement-addresse" required>
                                    </div>
                                    <div class=" form-group">
                                        
                                        <div class="row">
                                            <div class="adr">
                                                <label for="etablissement-cp">Code postal:</label>
                                                <input type="text" id="etablissement-cp" name="etablissement-cp" required>
                                            </div>
                                            <div class="adr">
                                                <label for="etablissement-ville">Ville:</label>
                                                <input type="text" id="etablissement-ville" name="etablissement-ville" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="etablissement-tel">N° de téléphone:</label>
                                        <input type="text" id="etablissement-tel" name="etablissement-tel" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="etablissement-mail">Mail:</label>
                                        <input type="text" id="etablissement-mail" name="etablissement-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="etablissement-site">Site web:</label>
                                        <input type="text" id="etablissement-site" name="etablissement-site" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="imageEta">Téléverser une image (.png ou .jpg):</label>
                                        <input type="file" id="etablissement-image" name="etablissement-image" accept=".png, .jpg">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Formulaire pour les Infos Personnelles -->
                        <div class="tab-content hidden" id="personal-info">
                            <div class="form-container">
                                <h2>Informations Personnelles</h2>
                                <form action="#" method="post">
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="adr">
                                                <label for="personne-nom">Nom:</label>
                                                <input type="text" id="personne-nom" name="personne-nom" required>
                                            </div>
                                            <div class="adr">
                                                <label for="personne-prenom">Prenom:</label>
                                                <input type="text" id="personne-prenom" name="personne-prenom" required>
                                            </div>
                                        </div>
                                        
                                    <div class="form-group">
                                        <label for="personne-addresse">Adresse:</label>
                                        <input type="text" id="personne-addresse" name="personne-addresse" required>
                                    </div>
                                    <div class=" form-group">
                                        
                                        <div class="row">
                                            <div class="adr">
                                                <label for="personne-cp">Code postal:</label>
                                                <input type="text" id="personne-cp" name="personne-cp" required>
                                            </div>
                                            <div class="adr">
                                                <label for="personne-ville">Ville:</label>
                                                <input type="text" id="personne-ville" name="personne-ville" required>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="personne-tel">N° de téléphone:</label>
                                        <input type="text" id="personne-tel" name="personne-tel" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="personne-mail">Mail:</label>
                                        <input type="text" id="personne-mail" name="personne-mail" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="personne-naissance">Date de naissance :</label>
                                        <input type="date" id="personne-naissance" name="personne-naissance">

                                    </div>

                                    <div class="form-group">
                                        <label for="typPer">Type:</label>
                                        <select name="typeCompte" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">Proviseur(e)</option>
                                            <option value="Normal distribution ">Proviseur(e) adjoint(e)</option>
                                            <option value="Normal distribution ">Professeur principal</option>
                                            <option value="Normal distribution ">Elève</option>
                                            <option value="Normal distribution ">Responsable légal</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="typPer">Etablissement:</label>
                                        <select name="typeCompte" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">Lycée Douanier Rousseau</option>
                                            <option value="Normal distribution ">Lycée d'Avesnière</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="typPer">Civilité:</label>
                                        <select name="typeCompte" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">Mr</option>
                                            <option value="Normal distribution ">Mme</option>

                                        </select>
                                    </div>                                    

                                    <div class="form-group">
                                        <label for="typPer">Responsable légal (pour les élèves mineurs):</label>
                                        <select name="typeCompte" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">Personne 1</option>
                                            <option value="Normal distribution ">Personne 2</option>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
</div>
                        <!-- Contenu de la liste des élèves -->
                        <div class="tab-content hidden" id="etudiant-list">
                            <div class="row">
                                <h2 class="col-md-9">Liste des Élèves</h2>
                                <div class="form-group col-md-3">
                                    <button type="button" onclick="showTab('personal-info')">Nouvel étudiant</button>
                                </div>
                            </div>    
                        
                            <!-- Tableau généré avec PHP -->
                            <?php
                                // Exemple de données pour le tableau
                                $etudiants = array(
                                    array('ID' => 1, 'Nom' => 'Élève 1'),
                                    array('ID' => 2, 'Nom' => 'Élève 2'),
                                    array('ID' => 3, 'Nom' => 'Élève 3')
                                );
                            ?>

                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Infos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($etudiants as $etudiant): ?>
                                        <tr>
                                            <td><?= $etudiant['ID']; ?></td>
                                            <td><?= $etudiant['Nom']; ?></td>
                                            <td>
                                                <div class="form-group">
                                                    <button type="button" onclick="showTab('personal-info')">Infos sur <?= $etudiant['Nom']; ?></button>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>


                
            </div>
        </div>
    </section>


    <script>
    function showTab(tabId) {
        // Masque tous les onglets
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach(tab => tab.classList.add('hidden'));

        // Affiche l'onglet spécifié
        const selectedTab = document.getElementById(tabId);
        selectedTab.classList.remove('hidden');
    }
</script>

    <!-- end profile section -->
    <?php include('footer.php'); ?>