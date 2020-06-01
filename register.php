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
    
    <form role="form" id="form">
        <h2 class="title">Registration form </h2>

        <hr>
        <div class="row regis">
            <div id="add_err2"></div>
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
                <button type="submit" id="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

    <!-- </div> -->
    <script src="js/register.js"></script>

</body>

</html>