<?php include('header.php'); ?>

    <!-- conventions section -->
    <section class="job_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    
                    <div class="profile-container">
                        
                        <!-- Formulaire pour les Infos Établissement -->
                        <div class="tab-content hidden" id="convention-info">
                            <div class="form-container">
                                <h2>Informations de l'Établissement</h2>
                                <form action="conventions.php" method="post">
                                    
                                <div class="form-group">
                                        <label for="eleve">Sélection de l'élève:</label>
                                        <select name="eleve" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">Eleve 1</option>
                                            <option value="Normal distribution ">Eleve 2</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ministage">Sélection du mini-stage:</label>
                                        <select name="ministage" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">Ministage 1</option>
                                            <option value="Normal distribution ">Ministage 2</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" onclick="showTab('convention-list')">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <!-- Contenu de la liste des conventions -->
                        <div class="tab-content" id="convention-list">
                            <div class="row">
                                <h2 class="col-md-9">Liste des conventions</h2>
                                <div class="form-group col-md-3">
                                    <button type="button" onclick="showTab('convention-info')">Nouvelle convention</button>
                                </div>
                            </div>
                            <!-- Tableau généré avec PHP -->
                            <?php
                                // Exemple de données pour le tableau
                                $conventions = array(
                                    array('ID' => 1, 'Nom' => 'Élève 1', 'Ministage' => 'Ministage 1'),
                                    array('ID' => 2, 'Nom' => 'Élève 2', 'Ministage' => 'Ministage 2'),
                                    array('ID' => 3, 'Nom' => 'Élève 3', 'Ministage' => 'Ministage 1')
                                );
                            ?>

                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Ministage</th>
                                        <th>Convention</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($conventions as $convention): ?>
                                        <tr>
                                            <td><?= $convention['ID']; ?></td>
                                            <td><?= $convention['Nom']; ?></td>
                                            <td><?= $convention['Ministage']; ?></td>
                                            <td>
                                                <div class="form-group">
                                                    <button type="button" onclick="showTab('convention-info')">Modifier</button>
                                                    <button type="button" >Télécharger</button>
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

    <!-- end conventions section -->
    <?php include('footer.php'); ?>