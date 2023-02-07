<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="website.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>

<body class="d-flex justify-content-center align-items-center">

    <div class="container d-flex justify-content-center align-items-center">
        <form class="container w-50" method="post" action="insert.php">
            <div class="mb-3 w-25 d-inline-block">
                <label for="exampleFormControlInput1" class="form-label">first name</label>
                <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1" placeholder="first name">
            </div>
            <div class="mb-3 w-25 d-inline-block">
                <label for="exampleFormControlInput1" class="form-label">family name</label>
                <input type="text" class="form-control" name="familyname" id="exampleFormControlInput1" placeholder="family name">
            </div>
            <div class="mb-3 w-25 d-inline-block">
                <label for="exampleFormControlInput1" class="form-label">Note</label>
                <input type="number" class="form-control" name="note" id="exampleFormControlInput1" placeholder="note">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="col-auto">
                <button type="submit" name="click" class="btn btn-primary mb-3">Confirm</button>
            </div>
        </form>
        <div class="container w-50 align-self-start">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First mame</th>
                        <th scope="col">family name</th>
                        <th scope="col">note</th>
                        <th scope="col">email</th>
                        <th scope="col">update</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'select.php';
                    while ($rus = mysqli_fetch_assoc($requt1)) {
                        echo "<tr class='tr'><td scope='col'>" . $rus['num'] . "</td><td scope='col'>" . $rus['firstname'] . "</td><td scope='col'>" . $rus['familyname'] . "</td><td scope='col'>" . $rus['note'] . "</td><td scope='col'>" . $rus['email'] . "</td><td><a href='update.php? editid=" . $rus['num'] . "' class='update btn btn-primary mb-3'>update</a></td></td><td><a href='delet.php? deleteid=" . $rus['num'] . "' class='btn btn-danger mb-3'>delete</a></td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="website.js"></script>
</body>