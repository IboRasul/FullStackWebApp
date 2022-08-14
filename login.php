<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="" <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <?php 
include_once "inc/header.inc.php"
?>

<div class="container border border-dark mt-5 col-4">
    <div class="row">

        <center>
            <form action="inc/.inc.php" method="POST" class="silver-background" >
                
            <div class="display-1 mb-5">Log In</div>
                            
                <p class="m-1">Username</p>                
                <input type="text" name="username" class="m-1">  
                    
                <p class="m-1">Password</p>                
                <input type="password" name="pwd" class="m-1">

                <input type="submit" value="Submit" name="submit" class="m-3 d-block btn btn-primary">

                <a href="signup.php" class="link-primary ">Sign Up</a>
                <p class="m-3"></p>

            </form>
        </center>
    </div>
</div>

</body>

</html>