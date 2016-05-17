<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>

<meta charset="utf-8"/>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../css/main.css">
    <link rel="stylesheet" href="../../css/photo-input.css">
        
<?php
 confirm_logged_in();
 include($root."/bap/html/headers/admin-header.html");
?>
        
<?php

$warning = false;
$success = false;
$message = "";
$image_name = "";

if(isset($_POST['submit'])){
    
    if(empty($_POST['email'])){      
        $warning = true;
        $message = "Must Enter An Email.";       
    }   
    if(isset($_POST['link'])){ 
        $link = $_POST['link'];    
    }
    
    // Encrypt Password Using MD5 and Salt
    if(isset($_POST['password'])){ 
        $password = $_POST['password']; 
        $hash_password = password_encrypt($password);
    } 
  
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $email = $_POST['email'];
 
    $level = $_POST['level'];   
    
    // Check if the Eamil Given is Unique
    $member = find_user_by_email($email);
    if ($member) {
        $warning = true;
        $message = "Email Is Already Used By Another Member.";
    }
   

    
    if(!$warning){
                
        $query = "INSERT INTO `member` "
                . "(`id`, `firstname`, `lastname`, `email`, `title`, `linkedin`, `phone`"
                . ", `picture_path`, `graduated`, `gradYear`, `major1`, `major2`, `major3`"
                . ", `password`, `level`) "
                . "VALUES (NULL, '$firstname', '$lastname', '$email', '', ''"
                . ", '', '', '', '', '', ''"
                . ", '', '$hash_password', '$level');";
        
        mysqli_query($conn, $query);
        
        $success = true;
    }
} 
?>
        
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="form-group col-lg-12">
          <h2> New Member Creation Form (Short Hand)</h2>
            <?php if($success){ ?>
               <div class="alert alert-success form-group col-lg-8" role="alert">              
                     <strong>Success!</strong> <?php echo "User Added to the System."; ?>              
                </div>           
            <?php
            } if($warning){ ?>
                <div class="alert alert-danger form-group col-lg-8" role="alert">              
                     <strong>Error!</strong> <?php echo $message; ?>              
                </div>           
            <?php 
                $warning = false;
                $success = false;
                $message = "";
            } ?>
        </div>
        <div class="input-group">          
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="form-inline">                  
                 <fieldset>                     
                    <div class="form-group col-lg-6">
                        <label>First Name:</label>
                        <input type="text" class="form-control" maxlength="24" placeholder="First Name" id="firstname" name="firstname">
                    </div>
      
                    <div class="form-group col-lg-6">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" maxlength="24" placeholder="Last Name" id="lastname" name="lastname">                
                    </div>
                 </fieldset>
              </div>
             
            
              <div class="form-inline">
                 <fieldset>                 
                    <div class="form-group col-lg-6">
                        <label>Email:</label>
                        <input type="email" class="form-control" maxlength="34" placeholder="example@asu.edu" name="email">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="sel1">Current Access Level:</label>
                        <select class="form-control" name="level">
                          <option>Candidate</option>
                          <option>Member</option>
                          <option>Executive</option>
                        </select>
                  </div>               
                 </fieldset>
              </div>
              <div class="form-group col-lg-12">
                <label>Password:</label>
                <input type="text" class="form-control" maxlength="24" name="password">
              </div>           
                
              </div>             
              <div class="form-group col-lg-12">                  
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>                
              </div>              
            </form>         
        </div>
    </div>
</div>
                    
<script src="../../js/jquery-1.12.3.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>  
<script src="../../js/photo-input.js"></script> 

  