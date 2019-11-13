<?php
// Add the database connection
include('database.php');
/*
*   CHECK IF THE URL HAS A $_GET VARIABLE CALLED ID
*/
if(isset($_GET['id'])) {
    $id = $_GET['id'];
} else {
    // redirect to crud.php
    header('Location: crud_finished.php');
    exit;
}
/*
*   AFTER SUBMITTING THE UPDATE FORM, UPDATE THE INFO
*   IN THE DATABASE
*/
    /*if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first_name = $_POST['first_name'];
        $last_name  = $_POST['last_name'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];*/
        
// Verify the boxes aren't empty
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    if (isset($_POST['del'])) {
	mysqli_query($connection, "DELETE FROM USER_ABDALLA WHERE user_id=$id");
    } else {
      $err = "<p class='text-danger'>There was an error deleting this user.</p>"; 
    }
    
    if (!empty($_POST['first_name'])) {
	$first_name = mysqli_real_escape_string($connection,$_POST['first_name']);	
    } else {
        $first = "<p class='text-danger'>Please enter a first name.</p>";
    } 
    
    if (!empty($_POST['last_name'])) {
	$last_name = mysqli_real_escape_string($connection,$_POST['last_name']);	
    } else {
        $last = "<p class='text-danger'>Please enter a last name.</p>";
    }
    
    if (!empty($_POST['email']) && filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)) {
	$email = mysqli_real_escape_string($connection,$_POST['email']);	
    } else {
        $mail = "<p class='text-danger'>Please enter a valid email address.</p>";
    }
    
    if (!empty($_POST['password'])) {
	$password = mysqli_real_escape_string($connection,$_POST['password']);	
    } else {
        $pw = "<p class='text-danger'>Please enter a password.</p>";
    }
    
    
   
    // If they aren't empty, create and run your query
    if ($first_name && $last_name && $email && $password) {
    $update_query = "UPDATE USER_ABDALLA
                     SET first_name = '$first_name',
                         last_name = '$last_name',
                         email = '$email',
                         password = '$password'
                     WHERE user_id = $id";
    } elseif($email) {
        //something
    }
    
    
    
    // Check if the database returned anything
    $update_result = mysqli_query($connection, $update_query);
        // If the UPDATE query was successful, redirect to
        // the crud.php page
        // Else, output an error message
    if($update_result) {
        header('Location: crud_finished.php');
    } else {
    $failure = "<p class='text-danger'> Unsucceful Update! Tray again.</p>";
    }
    
    
}
/*
*   QUERY THE DATABASE FOR THE USER THAT HAS THE GET ID
*/
// Create your query
$query = "SELECT * FROM USER_ABDALLA WHERE user_id = $id";
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    // If the database query was successful, store
    // the users information into a variable
    $user = mysqli_fetch_assoc($result);
    $first_name = $user['first_name'];
    $last_name  = $user['last_name'];
    $email      = $user['email'];
    $password   = $user['password'];
} else {
    echo 'No match for the user you have entered. Try again.';
}
?>


<?php
//DELETION
    
?>

<!doctype html>
<html>
<head>
    <title>crud exercise</title>
</head>
<body>
    <h1>Update User</h1>
    <form action="update.php?id=<?php echo $id ?>" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name ?>"><br><br>
        <?php echo($first) ?>
        
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name ?>"><br><br>
        <?php echo($last) ?>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="example@mail.com" value="<?php echo $email ?>"><br><br>
        <?php echo($mail) ?>

        <label for="password">Password</label>
        <input type="text" id="password" name="password" value="<?php echo $password ?>"><br><br>
        <?php echo($pw) ?>

        <button>Update User</button><br>
        <?php echo($failure) ?>
    </form>
</body>
</html>