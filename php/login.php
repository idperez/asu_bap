<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/asu_bap/includes/connection.php"); ?>
<?php require_once($root."/bap/asu_bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/asu_bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/asu_bap/includes/functions/validations.php"); ?>
<?php require_once($root."/bap/asu_bap/php/databaseservice.php"); ?>

<?php include($root."/bap/asu_bap/html/headers/main-header.html"); ?>


<?php
$DatabaseService = new DatabaseService;

$warning = false;

if(isset($_POST['submit'])) {
    // validations
  $required_fields = array("email", "password");
  validate_presences($required_fields);
  
  
  if (empty($errors)) {
    // Attempt Login

    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $found_member = attempt_login($email, $password);
    
    if ($found_member) {
      // Success
      // Mark user as logged in and give the session all of their information
      $_SESSION["id"] = $found_member["id"];
      $_SESSION["email"] = $found_member["username"];
      $_SESSION["firstname"] = $found_member["firstname"];
      $_SESSION["lastname"] = $found_member["lastname"];
      $_SESSION["email"] = $found_member["email"];
    
      redirect_to("member/home.php");
    } else {
      // Failure
      $warning = true;
    }    
  }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>SignIn</title>

    <link href="../css/signin.css" rel="stylesheet">

</head>


<body>
    <div class="container">

        <form class="form-signin" action="" method="post">
            
            <h2 class="form-signin-heading">Please sign in</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus/>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required/>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
            <?php
            if($warning){ ?>
                <div class="alert alert-danger" role="alert"  stype = "">              
                     <strong>Error!</strong> Incorrect email/password.              
                </div>          
            <?php } ?>
            <?php 
            if(isset($_SESSION['message'])){
                if($_SESSION['message'] != ""){
            print_message($_SESSION['message']); 
                }
            }
                  $_SESSION['message'] = "";
            ?>
        </form>
   
    </div>
</body>
</html>
