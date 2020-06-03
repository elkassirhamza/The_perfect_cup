<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Perfect Cup - Registration</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts -->
    <link
        href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css">
    <link
        href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
        rel="stylesheet" type="text/css">
    <script src="js/jquery.js"></script>
    
</head>

<body>


<?php 
$mysqli =  mysqli_connect("localhost","root","","test_connection");
// if($mysqli -> connect_errno){
//     echo "failed to connect to mysql". $mysqli -> connect_error;
//     exit();
// }
$msg="";

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
     
    if (strlen($fname)<3){

        $msg = "<div class='alert alert-danger'>Please enter a valid First name</div>";

    }else if (strlen($lname)<3){

        $msg = "<div class='alert alert-danger'>Please enter a valid First name</div>";

    }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){

        $msg = "<div class='alert alert-danger'>Please enter a valid email</div>";

    }else if (!preg_match("#.*^(?=.{6,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password )){

        $msg = "<div class='alert alert-danger'>Please enter a strong password use capital and small letter and 1 number or more and more than 2 special caractere</div>";

    }else{
        $password = password_hash($password, PASSWORD_DEFAULT);
        $requet = "INSERT INTO user(fname,lname,email,password) VALUES ('{$fname}','{$lname}','{$email}','{$password}')";
        $send_query = mysqli_query($mysqli,$requet);
        if (!$send_query) {
                die("QUERY FAILED" . mysqli_error($mysqli));
        }
        $msg="<div class='alert alert-success'><strong>your registration confirmed</strong></div>";

    }
}
?>
    <form role="form" id="form" action="register.php" method="POST">
        <h2 class="title">Registration form </h2>

        <hr>
        <div class="row regis">
            <div id="add_err2"><?php echo $msg ?></div>
            <div class="form-group col-lg-6">
                <label>FirstName</label>
                <input type="text" id="fname" name="fname" maxlength="25" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label>LastName</label>
                <input type="text" id="lname" name="lname" maxlength="25" class="form-control">
            
            </div>

            <div class="form-group col-lg-12">
                <label>Email Address</label>
                <input type="email" id="email" name="email" maxlength="30" class="form-control">
            </div>

            <div class="form-group col-lg-6">
                <label>password</label>
                <input type="password" id="password" name="password" maxlength="25" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label>Confirme password</label>
                <input type="password" id="confirmpassword" name="confirmpassword" maxlength="25" class="form-control">
                <span class="error error3"></span>
            </div>
            <div class="form-group col-lg-12">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

    <!-- </div> -->
    <!-- <script src="js/register.js"></script> -->

</body>

</html>