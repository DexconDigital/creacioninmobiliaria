<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        .altologin {
            height: 100vh;
        }

        .btn-success {
            background-color: #13223f;
            border-color: #13223f;
        }
    </style>
</head>
<body>
    <div class="container-fluid altologin">
        <div class="row justify-content-md-center altologin" style="background:#13223f">
            <div class="col-md-4 align-self-center">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6 offset-3">
                                <img src="../images/logo_blanco.jpg" alt="..." class="" style="max-width:100%; height:auto;">
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <form method="" action="">
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Usuario:</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" placeholder="Usuario" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        Ingresar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>