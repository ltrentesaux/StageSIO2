<?php include('header.php'); ?>

    <!-- classes section -->
    <section class="job_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    
                    <div class="profile-container">
                        
                        <!-- Formulaire pour les Infos Établissement -->
                        <div class="tab-content hidden" id="classe-info">
                            <div class="form-container">
                                <h2>Informations de la classe</h2>
                                <form action="classes.php" method="post">
                                    
                                <div class="form-group">
                                        <label for="eleve">Sélection du type de diplôme:</label>
                                        <select name="eleve" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">Bac général</option>
                                            <option value="Normal distribution ">Bac technologique</option>
                                            <option value="Normal distribution ">Bac pro</option>
                                            <option value="Normal distribution ">CAP</option>

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ministage">Sélection de la filière:</label>
                                        <select name="ministage" class="form-control wide" id="inputDoctorName">
                                            <option value="Normal distribution ">STMG</option>
                                            <option value="Normal distribution ">STI2D</option>
                                            <option value="Normal distribution ">Fleuriste</option>

                                        </select>
                                    </div>

                                    
                                    <div class="form-group">
                                        <label for="stage-description">Description :</label>
                                        <textarea id="stage-description" name="stage-description" rows="4" cols="50"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" onclick="showTab('classe-list')">Enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <!-- Contenu de la liste des classes -->
                        <div class="tab-content" id="classe-list">
                            <div class="row">
                                <h2 class="col-md-9">Liste des classes</h2>
                                <div class="form-group col-md-3">
                                    <button type="button" onclick="showTab('classe-info')">Nouvelle classe</button>
                                </div>
                            </div>
                            <!-- Tableau généré avec PHP -->
                            <?php
                                // Exemple de données pour le tableau
                                $classes = array(
                                    array('ID' => 1, 'Nom' => 'Classe 1'),
                                    array('ID' => 2, 'Nom' => 'Classe 2'),
                                    array('ID' => 3, 'Nom' => 'Classe 3')
                                );
                            ?>

                            <table>
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nom</th>
                                        <th>Classe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($classes as $classe): ?>
                                        <tr>
                                            <td><?= $classe['ID']; ?></td>
                                            <td><?= $classe['Nom']; ?></td>
                                            <td>
                                                <div class="form-group">
                                                    <button type="button" onclick="showTab('classe-info')">Modifier</button>
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

    <!-- end classes section -->
    <?php include('footer.php'); ?>