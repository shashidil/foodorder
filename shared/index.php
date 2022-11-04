<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap jS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body class="bg-primary-bg-opacity-25">
<nav class="navbar navbar-expand-sm navbar-light bg-info " >
        <a href="#" class="navbar-brand">Express Food</a>
        <button class="navbar-toggler" data-bs-toggler="collapse" data-bs-target="#ccl"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse justify-content-center" id="ccl">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="" class="nav-link">Order</a></li>
            <li class="nav-item"><a href="" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="" class="nav-link">Contact Us</a></li>
        </ul>

        </div>
        
    </nav>
<br>
<div class="container">
    <div class=" row-cols-2">
        <div class=" panel-primary">
            <!--form-input-->
           
            <div class="d-flex flex-row p-4 bg-primary text-white text-center">
                Registration Form
            </div>
            <form class="m-5" action="#" method="POST">
            <div class="row">
            <div class="col">
            <label for="fname" class="form-lable">First Name</label>
                <input type="email" class="form-control" id="fname" placeholder="First Name" required>
            </div>
                <div class="col">
                <label for="lname" class="form-lable" >Last Name</label>
                <input type="email" class="form-control" id="lname" placeholder="Last Name" required>
            </div>
           
            </div>
            <div class="col">
                <label for="email" class="form-lable">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
            </div>
            <div class="row">
            <div class="col-md-8">
                 <label for="inputCity" class="form-label">City</label>
                 <input type="text" class="form-control" id="inputCity" required>
            </div>
            <div class="col-md-4">
                 <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option value="Galle">Galle</option>
                <option value="Matara">Matara</option>
                <option value="Colombo">Colombo</option>
                <option>Galle</option>
                <option>Galle</option>
    </select>
            </div>
            </div>
            <div class="col">
                <label for="telephone" class="form-lable">Telephone</label>
                <input type="phone number" class="form-control" id="telephone" placeholder="Telephone" required>
            </div>
            <div class="col">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="col">
                <label for="conpassword">Confirm Password</label>
                <input type="password" class="form-control" id="conpassword" placeholder="Confirm Password" required>
            </div>
            </form>
             <!--btn submit-->
            <div class="d-grid gap-2 mt-3">
                <button type="submit" href="#" class="btn btn-primary">Sign in</button>
             </div>
             <!--footer-->
            <div class="panel-footer">
                footer
            </div>

        </div>

    </div>
</div>




   

</body>

</html>