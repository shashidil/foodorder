<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap jS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>login</title>
</head>
<body class="bg-primary">
    
    <section class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto bg-white">
                <div class="row">
                    <div class="col-md-6">
                        <div class="col-m-5 text-center">
                            <h1>WELCOME</h1>
                        </div>
                        <form action="#" class="m-5">
                            <div class="mb-3">
                            <label for="uName">User Name</label>
                            <input type="text" class="form-control" id="uName" placeholder="User Name" required>
                            </div>
                            <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" id="password" placeholder="password" required>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="remember">
                                        <label for="remember" class="form-check-lable">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-end">
                                    <a href="#">Forget password?</a>

                                    </div>
                                    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-3">
                                    <input class="btn btn-primary" type="submit" value="Sign In">
                                    </div>
                                    <div class="col-3">
                                    <input class="btn btn-primary" type="submit" value="Sign Up">
                                    </div>
                                </div>
                            </div>
                       
                        

                        </form>

                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="login.svg" alt="login" class="img-fluid p-5">
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    </section>
    
</body>
</html>