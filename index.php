<?php include('header.php'); ?>

    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-lg-7 col-md-8 mx-auto">
            <div class="detail-box">
              <h1>
                Faites une recherche
              </h1>
              <p>
                Recherchez un établissement ou des informations sur un mini-stage ou une filière
              </p>
            </div>
          </div>
        </div>
        <div class="find_container ">
          <div class="container">
            <div class="row">
              <div class="col">
                <form>
                  <div class="form-row ">
                    <div class="form-group col-lg-3">
                      <input type="text" class="form-control" id="inputPatientName" placeholder="Keywords">
                    </div>
                    <div class="form-group col-lg-3">
                      <select name="" class="form-control wide" id="inputDoctorName">
                        <option value="Normal distribution ">Etablissement 1</option>
                        <option value="Normal distribution ">Etablissement 2 </option>
                        <option value="Normal distribution ">Etablissement 3 </option>
                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <select name="" class="form-control wide" id="inputDepartmentName">
                        <option value="Normal distribution ">CAP</option>
                        <option value="Normal distribution ">Bac Pro</option>
                        <option value="Normal distribution ">Bac Technologique</option>
                        <option value="Normal distribution ">Bac général</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-3">
                      <div class="btn-box">
                        <button type="submit" class="btn ">Recherche</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>            
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>  
<!-- expert section -->
<section class="expert_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Liste des établissements
        </h2>
        <p>
          Voici la liste des établissements scolaires proposant des mini-stages
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/lycee1.png" alt="lycée douanier rousseau">
            </div>
            <div class="detail-box">
              <a href="https://douanier-rousseau.paysdelaloire.e-lyco.fr">
                Lycée Douanier Rousseau
              </a>
              <p>
                7 rue des Archives, 53000 Laval.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="etablissements.php">
          View All
        </a>
      </div>
    </div>
  </section>

  <!-- end expert section -->

  <!-- job section -->
  <section class="job_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Les mini-stages
        </h2>
      </div>


      <div class="job_container">
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

        <div class="btn-box">
          <a href="stages.php">
            View All
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end job section -->


  

  <?php include('footer.php'); ?>
  