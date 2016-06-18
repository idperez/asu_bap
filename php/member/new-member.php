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
    $gradyear = $_POST['gradyear'];
    $graduated = $_POST['graduated'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $level = $_POST['level'];
    $title = $_POST['title'];
    
    $major1 = $_POST['major1'];
    $major2 = $_POST['major2'];
    $major3 = $_POST['major3'];    
    
    // Check if the Eamil Given is Unique
    $member = find_user_by_email($email);
    if ($member) {
        $warning = true;
        $message = "Email Is Already Used By Another Member.";
    }
   
   // Handel Image Uploaded For Profile Picuture
   if(!empty($_FILES) || isset($_FILES['photo'])){    
        
        $image_name = $_FILES['photo']['name'];
        $image_type = $_FILES['photo']['type'];
        $image_size = $_FILES['photo']['size'];
        $image_tmp = $_FILES['photo']['tmp_name'];
        $errors = $_FILES['photo']['error'];
        
        if($errors == 0){          
            move_uploaded_file($image_tmp, $root."/bap/assets/profile_pics/".$image_name);          
        }    
    }  
    
    if(!$warning){
                
        $query = "INSERT INTO `member` "
                . "(`id`, `firstname`, `lastname`, `email`, `title`, `linkedin`, `phone`"
                . ", `picture_path`, `graduated`, `gradYear`, `major1`, `major2`, `major3`"
                . ", `password`, `level`) "
                . "VALUES (NULL, '$firstname', '$lastname', '$email', '$title', '$link'"
                . ", '$phone', '$image_name', '$graduated', '$gradyear', '$major1', '$major2'"
                . ", '$major3', '$hash_password', '$level');";
        
        mysqli_query($conn, $query);
    }
} 
?>
        
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="form-group col-lg-12">
          <h2> New Member Creation Form </h2>
            <?php
            if($warning){ ?>
                <div class="alert alert-danger form-group col-lg-12" role="alert">              
                     <strong>Error!</strong> <?php echo $message; ?>              
                </div>           
            <?php 
                $warning = false;
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
                        <label>Grad Year:</label>
                        <input type="number" min="2000" max="2050" class="form-control" placeholder=""  name="gradyear">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="sel1">Graduated:</label>
                        <select class="form-control" name="graduated">
                          <option value="0">No</option>
                          <option value="1">Yes</option>
                        </select>
                    </div>  
                 </fieldset>
              </div>
              <div class="form-inline">
                <fieldset>
                  <div class="form-group col-lg-6">
                    <label>Phone:</label>
                    <input type="text" class="form-control" placeholder="(480) 555-5555"name="phone">
                  </div>
                  <div class="form-group col-lg-6">
                    <label>Title:</label>
                    <input type="text" class="form-control" maxlength="24" placeholder="Executive Title" name="title">
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
              <div class="form-inline">
                <fieldset>
                  <div class="form-group col-lg-4">
                    <label>Major 1:</label>
                    <input type="email" class="form-control" maxlength="24" placeholder="" name="major1">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Major 2:</label>
                    <input type="text" class="form-control" maxlength="24" placeholder="" name="major2">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Major 3:</label>
                    <input type="text" class="form-control" maxlength="24" placeholder="" name="major3">
                  </div>
                </fieldset>
              </div>              
              <div class="form-group col-lg-12">
                <label>Linkedin Address:</label>
                <input type="url" class="form-control" placeholder="https://www.linkedin.com/in/membername" name="link">
              </div>
              <div class="form-group col-lg-12">
                <label>Password:</label>
                <input type="text" class="form-control" maxlength="24" name="password">
              </div>           
              <div class="form-group image-preview col-lg-12">
                <label>Profile Picture:</label>
                  <input type="text" class="form-control image-preview-filename" disabled="disabled"> 
                  <span class="input-group-btn">    
                    <button type="button" class="form-group btn btn-default image-preview-clear" style="display:none;">
                      <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                      <div class="btn btn-default image-preview-input">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/> <!-- rename it -->
                      </div>
                  </span>
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

  