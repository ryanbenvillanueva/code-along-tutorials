<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>User Registration | PHP</title>
</head>

<body>

    <div>
        <?php
if (isset($_POST['create'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];

    echo $firstname . ' ' . $lastname . ' ' . $email . ' ' . $phonenumber . ' ' . $password;
}
?>
    </div>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct values</p>
                        <hr class="mb-3">
                        <label for="firstname">First Name</label>
                        <input class="form-control" type="text" name="firstname" required>

                        <label for="lastname">Last Name</label>
                        <input class="form-control" type="text" name="lastname" required>

                        <label for="email">Email Address</label>
                        <input class="form-control" type="email" name="email" required>

                        <label for="phonenumber">Phone Number</label>
                        <input class="form-control" type="text" name="phonenumber" required>

                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" required>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>