<?php
// Add the database connection
include('database.php');
    /*$first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retypepassword = $_POST['retypePassword'];
    */
    $first_name = "";
    $last_name = "";
    $password = "";
    $email = "";
    $password = "";
    $retypePassword = "";
    $rpw = "";
    $match = "";
    $create = "";
    $mail = "";
    $pw = "";
    $first = "";
    $last = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['first_name'])) {
	$first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    } else {
        $first = "<p class='text-danger'>Please enter a first name.</p>";
    }

    if (!empty($_POST['last_name'])) {
	$last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    } else {
        $last = "<p class='text-danger'>Please enter a last name.</p>";
    }

      if (!empty($_POST['email']) && filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)) {
	$email = mysqli_real_escape_string($connection, $_POST['email']);
    } else {
        $mail = "<p class='text-danger'>Please enter an email address.</p>";
    }

    if (!empty($_POST['password'])) {
	$password = mysqli_real_escape_string($connection, $_POST['password']);
    } else {
        $pw = "<p class='text-danger'>Please enter a password.</p>";
    }

    if (!empty($_POST['retypePassword'])) {
	$retypePassword = mysqli_real_escape_string($connection, $_POST['retypePassword']);
    } else {
        $rpw = "<p class='text-danger'>Please retype your password.</p>";
    }

    if ($password == $retypePassword) {
	$validatePassword = mysqli_real_escape_string($connection, $password);	
    } else {
        $match = "<p class='text-danger'>Passwords do not match.</p>";
    }


    // If everything is validated, INSERT new user into database
    if ($first_name && $last_name && $email && $validatePassword) {
    $sql = "INSERT INTO USER_ABDALLA (first_name, last_name, email, password)
    VALUES ('$first_name','$last_name','$email','$validatepassword')";
    mysqli_query($connection, $sql);
    $create = "<p class='text-success'> Successfull Registration.</p>";
    } else {
        //$error = "<p class='text-danger'>Kindly refill the form.</p>";
    }
    }
?>

<!doctype html>
<html>
<head>
    <title>crud exercise</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather|Poppins|Russo+One&display=swap" rel="stylesheet">

  <style>
    body {
        background-color: purple;
        margin-top: 1em;
        margin-bottom: 1em;
        font-family: 'Merriweather', serif;
    }
    h1,h2 {
        color: black;
        font-family: 'Russo One', sans-serif;
        font-size: 3em;
    }
    .borders {
        border: solid;
        border-radius: 5px;
        background-color: white;
        padding: 1em;
    }


  </style>
</head>
<body>

    <div class="row text-center">
    <div class="col-md-1"></div>
    <div class="col-md-6 text-center borders">

    <h1>Sign up Form</h1>
    <form action="crud_finished.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name"value="<?php echo $first_name ?>"><br>
        <?php echo($first) ?>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name"value="<?php echo $last_name ?>"><br>
        <?php echo($last) ?>

        <label for="email">Email</label>
        <input type="email" id="email" name="email"value="<?php echo $email ?>"><br>
        <?php echo($mail) ?>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"value="<?php echo $password ?>"><br>
        <?php echo($pw) ?>

    <!--Add a second password input so the user has to retype their password -->

        <label for="retypepassword">Re-type Password</label>
        <input type="password" id="retypepassword" name="retypePassword"value="<?php echo $retypePassword ?>"><br>
        <?php echo($rpw) ?>
        <?php echo($match) ?>
        <?php echo($create) ?>

        <button type="submit" name="submit">Submit</button>
    </form>
    </div>
    </div>
    </div>
    <br><br>
    <div class="row text-center">
    <div class="col-md-1"></div>
    <div class="col-md-6 text-center ">

    <h2>List of Users</h2>
<?php
    // Create your query
$query = "SELECT * FROM USER_ABDALLA;";
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // Output the results

        //print_r($rows);
} else {
    // Output an text-danger
}
?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($rows as $row) {
            echo'<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
                <td><a href="update.php?id='.$row['user_id'].'">Edit</a></td>
            </tr>';
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
    <div class="col-md-1"></div>
    </div>

</body>
</html>