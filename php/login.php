<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>
<?php require_once($root."/bap/php/member/MemberList.php"); ?>

<?php
$MemberList = new MemberList;

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
      $warning = true;
    }    
  }

}

?>
<?php $_SESSION['page'] = "login" ?>
<?php include($root."/bap/html/headers/photo-header.php"); ?>

   <div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" style="background-image: url(/bap/assets/images/wp-carey-building.jpg); ">
        <div class="desc animate-box" style="position:relative; top:280px; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-4">
                        <form role="form" action="" method="post" enctype="multipart/form-data" style=" margin: 0 auto; width:80%">
                            <div class="form-group col-md-6 ">
                                <label>Email:</label>
                                    <input type="email" class="form-control" maxlength="24" placeholder="email" id="firstname" name="email">
                                    <br>
                                <label>Password:</label>
                                    <input type="password" class="form-control" maxlength="24" placeholder="password" name="password">
                                    <br>
                                <button type="submit" class="btn btn-danger" name="submit">Log In</button>
                                    <br>
                                <?php
                                if($warning){ ?>
                                    <br>
                                    <div class="alert alert-danger" role="alert"  stype = "">              
                                        <strong>Error!</strong> Incorrect email/password.              
                                    </div>          
                                <?php } ?>
                                    <br>
                                <?php
                                    
                                if(isset($_SESSION['message'])){
                                    if($_SESSION['message'] != ""){
                                        print_message($_SESSION['message']); 
                                    }
                                }
                                    $_SESSION['message'] = "";
                                ?>
                            </div>                     
                        </form>         
                    </div>
                </div>                      
            </div>
        </div>
        </div>
        </div>
</body>
<footer>
<?php require_once($root."/bap/html/footer.php"); ?>
