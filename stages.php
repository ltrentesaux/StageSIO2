<?php include('header.php'); ?>

  <!-- job section -->
  <section class="job_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center col-md-12 col-lg-12">
        <div class="row">
          <h2 class="col-md-9">Les ministages</h2>
          <div class="form-group col-md-3">
            <button type="button" onclick="showTab('ministage-gestion')">Gestion</button>
          </div>
        </div>
      </div>


      <div id="ministage-list" class="tab-content job_container">
        <div class="row">
          <div class="col-lg-6">
            <div class="box">
              <div class="job_content-box">
                <div class="img-box">
                  <img src="images/lycee1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Filière générale
                  </h5>
                  <div class="detail-info">
                    <h6>
                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                      <span>
                        Description de la filière
                      </span>
                    </h6>
                  </div>
                  <div class="detail-info">
                    <h6>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                      <span>
                        03/03/2024 10:00-03/03/2024 17:00
                      </span>
                    </h6>
                  </div>
                  <div class="detail-info">
                    <h6>
                      <i aria-hidden="true"></i>
                      <span>
                        0/10 participants
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="option-box">
                <button class="fav-btn">
                  <a href="" class="apply-btn">
                    Inscription
                  </a>
                </button>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box">
              <div class="job_content-box">
                <div class="img-box">
                  <img src="images/lycee1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Filière STMG
                  </h5>
                  <div class="detail-info">
                    <h6>
                      <i class="fa fa-info-circle" aria-hidden="true"></i>
                      <span>
                        Description de la filière
                      </span>
                    </h6>
                  </div>
                  <div class="detail-info">
                    <h6>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                      <span>
                        03/03/2024 10:00-03/03/2024 17:00
                      </span>
                    </h6>
                  </div>
                  <div class="detail-info">
                    <h6>
                      <i aria-hidden="true"></i>
                      <span>
                        0/10 participants
                      </span>
                    </h6>
                  </div>
                </div>
              </div>
              <div class="option-box">
                <button class="fav-btn">
                  <a href="" class="apply-btn">
                    Inscription
                  </a>
                </button>
              </div>
            </div>
          </div>


        </div>
      </div>



      <div class="tab-content hidden" id="ministage-info">
        <div class="form-container">
            <h2>Informations du ministage</h2>
            <form action="stages.php" method="post">
                
            <div class="form-group">
              <label for="stage-filiere">Filière:</label>
              <select name="stage-filiere" class="form-control wide" id="stage-filiere ">
                <option value="Normal distribution ">Général</option>
                <option value="Normal distribution ">STMG</option>
              </select>
            </div>

            <div class="form-group">
              <label for="stage-dateDeb">Début :</label>
              <input type="datetime-local" id="stage-dateDeb" name="stage-sateDeb">

            </div>

            <div class="form-group">
              <label for="stage-dateFin">Fin :</label>
              <input type="datetime-local" id="stage-dateFin" name="stage-dateFin">

            </div>

            <div class="form-group">
              <label for="stage-place">Nombre de places :</label>
              <input type="number" id="stage-place" name="stage-place">

            </div>

              <div class="form-group">
                <button type="submit" onclick="showTab('ministage-gestion')">Enregistrer</button>
              </div>
            </form>
          </div>
        </div>

      <div class="tab-content hidden" id="ministage-gestion">
         <div class="row">
             <h2 class="col-md-9">Liste des  ministages</h2>
             <div class="form-group col-md-3">
                 <button type="button" onclick="showTab('ministage-info')">Nouveau  ministage</button>
             </div>
         </div>
         <!-- Tableau généré avec PHP -->
         <?php
             // Exemple de données pour le tableau
             $ministages = array(
                 array('ID' => 1, 'Filiere' => 'Filière générale', 'Description' => 'Bac Général', 'Debut' => '2024-03-03 10:00', 'Fin'=> '2024-03-03 17:00', 'NbPlaces'=> 10, 'NbParticipants'=> 1),
                 array('ID' => 2, 'Filiere' => 'Filière STMG', 'Description' => 'Bac Pro', 'Debut' => '2024-03-03 10:00', 'Fin'=> '2024-03-03 17:00', 'NbPlaces'=> 10, 'NbParticipants'=> 0)
             );
         ?>

         <table>
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Filière</th>
                     <th>Description</th>
                     <th>Début</th>
                     <th>Fin</th>
                     <th>Nombre de places</th>
                     <th>Nombre de participants</th>
                     <th>Gestion</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach ($ministages as $ministage): ?>
                     <tr>
                         <td><?= $ministage['ID']; ?></td>
                         <td><?= $ministage['Filiere']; ?></td>
                         <td><?= $ministage['Description']; ?></td>
                         <td><?= $ministage['Debut']; ?></td>
                         <td><?= $ministage['Fin']; ?></td>
                         <td><?= $ministage['NbPlaces']; ?></td>
                         <td><?= $ministage['NbParticipants']; ?></td>
                         <td>
                             <div class="form-group">
                                 <button type="button" onclick="showTab('ministage-info')">Modifier</button>
                             </div>
                         </td>
                     </tr>
                 <?php endforeach; ?>
             </tbody>
         </table>
     </div>
    </div>
  </section>
  <!-- end job section -->


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
  <?php include('footer.php'); ?>