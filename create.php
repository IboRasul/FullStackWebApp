<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php 
        require_once "inc/header.inc.php"
    ?>

    <div class="container">
        <div class="display-5">
            Create A Post +
            </div>
    </div>

    <div class="cotainer m-5 " style="background-color: silver; border-radius: 0.5rem;">

    <form action="" method="get">

        <div class="form-group m-2">
        <label for="">Company Name</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Postr">
        </div>

        <div class="form-group m-2">
        <label for="">Job Title</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Developer">
        </div>

        <div class="form-group m-2">
        <label for="">Location</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Erbil">
        </div>

        <div class="form-group m-2">
        <label for="">Tags</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="FrontEnd, BackEnd, Reddit, Instagram">
        </div>


        <div class="form-group m-2 pb-2">
        <label for="">Description</label>
        <textarea class="form-control" name="" id="" rows="5" placeholder="Lorem Ipsum text here "></textarea>
        </div>
    </form>

    </div>

</body>
</html>