<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR - BHT</title>
    <link rel="stylesheet" href="../static/vendors/bootstrap/bootstrap.min.css">
</head>
<body>
<body class="authentication-page">
        <div class="account-pages my-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">
                            <div class="card-header text-center p-4 bg-primary">
                                <h4 class="text-white mb-0 mt-0">BHT SARL</h4>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <h1 class="text-error display-4 font-weight-bold">ERROR</h1>
                                    <h3 class="text-uppercase font-weight-bold text-danger mt-4">Internal Server Error</h3>
                                    <p class="text-muted mt-4"> Désolé ! Une erreur s'est produite. <a href="#" class="text-primary"><b>Support</b></a></p>
                                    <details style='text-align:left; margin-left:10%' class='text-danger'>
                                        <p class='text-muted'><?= 'File : ' . $e -> getFile() . ' => Line ' . $e -> getLine() ?></p>
                                        <p class='text-muted'><?= 'Error : ' . $e -> getCode() . ' => ' . $e -> getMessage() ?></p>
                                    </details>
                                    <a class="btn w-100 btn-block btn-primary waves-effect waves-light mt-4" href="mailto:xxxx@gmail.com"> Contactez les administrateurs</a>
                                </div>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>

</body>
</html>