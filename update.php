<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="website.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<?php
include 'connect.php';
$requte =mysqli_query($con,"select * from menuetudio where num=".$_GET['editid']);
$rus=mysqli_fetch_assoc($requte);
$editid=$rus['num'];
?>
<body class="d-flex justify-content-center align-items-center">
    <div class="container d-flex justify-content-center align-items-center">
        <form class="container w-50" method="post" action="edit.php? editid=<?php echo $editid?>">
            <div class="mb-3 w-25 d-inline-block">
                <label for="exampleFormControlInput1" class="form-label">first name</label>
                <input type="text" value="<?php echo $rus['firstname'] ?>" class="form-control" name="firstname" id="exampleFormControlInput1" placeholder="first name">
            </div>
            <div class="mb-3 w-25 d-inline-block">
                <label for="exampleFormControlInput1" class="form-label">family name</label>
                <input type="text" value="<?php echo $rus['familyname'] ?>" class="form-control" name="familyname" id="exampleFormControlInput1" placeholder="family name">
            </div>
            <div class="mb-3 w-25 d-inline-block">
                <label for="exampleFormControlInput1" class="form-label">Note</label>
                <input type="number" value="<?php echo $rus['note'] ?>" class="form-control" name="note" id="exampleFormControlInput1" placeholder="note">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" value="<?php echo $rus['email'] ?>" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="col-auto">
                <button type="submit" name="click" class="btn btn-primary mb-3">update</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>