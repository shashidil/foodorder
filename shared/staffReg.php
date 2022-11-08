<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap jS bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- External CSS -->
    <link rel="stylesheet" type="text/css" href="/asset/css/style.css">
    <style>
        body{
            padding-top: 200px;
            padding-left: 200px;
        
            background-color: lightblue;
        }
        
    </style>
    <title>staffReg</title>
</head>
<body>

<!--<div class="d-flex  mt-5 mb-5 justify-content-center bg-primary">Text</div>-->
<div class="container">
<div class="col-6">
    <form action="#" class="mb-5 bg-white rounded p-2 m-5 ">
        <h2>Staff Registration</h2>
        <div class="form-group">
        <div class="row">
            <div class="col-md-6">
            <label for="fname" class="form-lable">First Name</label>
                <input type="email" class="form-control" id="fname" placeholder="First Name" required>
            </div>
                <div class="col-md-6">
                <label for="lname" class="form-lable" >Last Name</label>
                <input type="email" class="form-control" id="lname" placeholder="Last Name" required>
            </div>
           
            </div>
            <div class="form-group">
            <label for="email" class="form-lable">Email</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div>
            <div class="form-group">
            <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
            </div>
            <div class="form-group">
            <label for="telephone" class="form-lable">Telephone</label>
                <input type="phone number" class="form-control" id="telephone" placeholder="Telephone" required>
            </div>
            <div class="form-group">
            <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
            <label for="conpassword">Confirm Password</label>
                <input type="password" class="form-control" id="conpassword" placeholder="Confirm Password" required>
            </div>
           
            <div class="form-group" role="group" aria-label="Basic outlined example">
                <button type="submit" class="btn btn-outline-primary btn-block">Submit</button>
                <button type="submit" class="btn btn-outline-primary btn-block">Delete</button>
                <button type="submit" class="btn btn-outline-primary btn-block">Edit</button>
</div>
           
        </div>
    </form>
</div>
</div>

</body>
</html>