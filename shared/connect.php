<?php
 include 'C:\xampp\htdocs\foodorder\shared\dbconect.php';
 include 'C:\xampp\htdocs\foodorder\shared\index.php';

if (isset($_POST['submit'])){
    $firstname= $_POST['fname'];
    $lname= $_POST['lname'];
    $email= $_POST['email'];
    $inputAddress= $_POST['inputAddress'];
    $inputCity= $_POST['inputCity'];
    $inputState= $_POST['inputState'];
    $telephone= $_POST['telephone'];
    $password= $_POST['password'];
    $conpassword= $_POST['conpassword'];

    $sqlinsert= "INSERT INTO customer (fname,Lname,username,Email,Telephone,city,state,password,address) Values (' $firstname','$lname','$email','$inputAddress','$inputCity','$inputState','$telephone','$password','$inputAddress')";
    if(mysqli_query($conn,$sqlinsert)){
        echo "<font color='red'>Record added succussfully...</font>";


    }
    else{

    }
    mysqli_close($conn);
}
else{


}


?>