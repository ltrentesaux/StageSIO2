<?php include('header.php'); ?>

    <!-- login section -->
    <section class="job_section layout_padding hero_area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-5 mx-auto">
                    <div class="login-container">
                        <h2>Connexion</h2>
                        <form class="login-form" action="#" method="post">
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur:</label>
                                <input type="text" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                    <label class="col-md-10 control-label">Mot de passe:</label>
                                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                </div>
                                
                                <input id="password-field" type="password" class="form-control" name="password" >
                                
                            </div>
                            <div class="form-group">
                                <button type="submit">Se Connecter</button>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="col-md-8 col-lg-5 mx-auto">
                    <div class="login-container">
                        <h2>Inscription</h2>
                        <form class="login-form" action="#" method="post">
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur:</label>
                                <input type="text" id="username" name="username" required>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <label class="col-md-10 control-label">Mot de passe:</label>
                                    <span toggle="#mdp-field" class="fa fa-fw fa-eye field-icon toggle-mdp"></span>
                                </div>
                                
                                
                                <input id="mdp-field" type="password" class="form-control" name="mdp" >
                                
                                
                            </div>

                            <div class="form-group">
                                <label for="username">Mail:</label>
                                <input type="text" id="mail" name="mail" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Type de compte:</label>
                                <select name="typeCompte" class="form-control wide" id="inputDoctorName">
                                    <option value="Normal distribution ">Proviseur(e)</option>
                                    <option value="Normal distribution ">Proviseur(e) adjoint(e)</option>
                                    <option value="Normal distribution ">Professeur</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <button type="submit">S'inscrire</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end job section -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script>
    $(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
    }
    });
</script>

<script>
    $(".toggle-mdp").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
    input.attr("type", "text");
    } else {
    input.attr("type", "password");
    }
    });
</script>


    <?php include('footer.php'); ?>