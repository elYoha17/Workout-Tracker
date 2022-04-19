<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>login with overlay image - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">Connectez-vous</h3>
                                </div>

                                <h6 class="h5 mb-0">Bienvenu à vous!</h6>
                                <p class="text-muted mt-2 mb-5">Pour continue votre vie d'éditeur, veuillez utilisé votre Pseudo et votre mot de passe pour vous connectez</p>

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Pseudo</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1">
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="exampleInputPassword1">Mot de passe</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-theme">Connexion</button>
                                    <a href="#l" class="forgot-link float-right text-primary"> Mot de passe oublié ?</a>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-4">BOUANYA</h4>
                                    <p class="lead text-white">"Bibliothèque en ligne et réseau social pour tout le chercheur scientifique"</p>
                                    <p>-Devenez editeur-</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <p class="text-muted text-center mt-3 mb-0">Si vous n'avez pas de compte veuillez-vous  <a href="register.html" class="text-primary ml-1">inscrire!</a></p>

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>

<style type="text/css">
body{
    margin-top:20px;
    background: #f6f9fc;
}
.account-block {
    padding: 0;
    background-image: url(img/img1.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    position: relative;
}
.account-block .overlay {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.4);
}
.account-block .account-testimonial {
    text-align: center;
    color: #fff;
    position: absolute;
    margin: 0 auto;
    padding: 0 1.75rem;
    bottom: 3rem;
    left: 0;
    right: 0;
}

.text-theme {
    color: #5369f8 !important;
}

.btn-theme {
    background-color: #5369f8;
    border-color: #5369f8;
    color: #fff;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>