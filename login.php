<?php session_start(); ?>
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
<div class="brand">The Perfect Cup</div>
    <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

    <!-- Navigation -->
    <?php include 'nav.php' ?>
    <?php
    
    $msg = "";
if (isset($_POST['login'])) {

    $mysqli =  mysqli_connect("localhost","root","","test_connection");
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email = mysqli_real_escape_string($mysqli,$email);
    $password = mysqli_real_escape_string($mysqli,$password);

    $query = "SELECT * FROM user WHERE email = '{$email}'";
    $login_query = mysqli_query($mysqli,$query);

    if (!$login_query) {
        die("QUERY FAILED" . mysqli_error($mysqli));
    }

    while($row = mysqli_fetch_assoc($login_query)){
        $db_id = $row['id'];
        $db_fname = $row['fname'];
        $db_lname = $row['lname'];
        $db_email = $row['email'];
        $db_password = $row['password'];
    } 
    $row_count = mysqli_num_rows($login_query);
    if (!$row_count == 1) {
        $msg = "<div class='alert alert-danger'>this email does not exist, try again or <a href='register.php'>register</a> </div>";;
    }else {
        if (password_verify($password, $db_password)) {
            $_SESSION['id'] = $db_id;
            $_SESSION['fname'] = $db_fname;
            $_SESSION['lname'] = $db_lname;

            header('Location: blog.php');
        } else{
            $msg =  "<div class='alert alert-danger'>password invalid</div>";
        }
    }
}
    




?>   
    <div class="container">
        <div class="row ">
            <div class="box ">
                <form role="form" id="form" action="login.php" method="POST">
                    <h2 class="title">Login</h2>

                    <hr>
                    <div class="row regis">
                        <div id="add_err2"><?php echo $msg ?></div>
                    
                        <div class="form-group col-lg-7">
                            <label>Email Address</label>
                            <input type="email" id="email" name="email" maxlength="30" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-7">
                            <label>password</label>
                            <input type="password" id="password" name="password" maxlength="25" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-4">
                            <button type="submit" id="login" name = "login" class="btn btn-default">Login</button>
                        </div>
                        <div class="form-group col-lg-6">
                            <a href="register.php" class="btn btn-default">Click here to register</a>
                        </div>
                    </div>

                </form>
                
             </div>
        
        </div>
    </div>
<footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; The Perfect Cup 2019</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- </div> -->
    <!-- <script src="js/register.js"></script> -->

</body>

</html>