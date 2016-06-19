<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>
<?php require_once($root."/bap/php/databaseservice.php"); ?>

<?php $_SESSION['page'] = "members" ?>

<?php include($root."/bap/html/headers/photo-header.php"); ?>   
 
<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
        <div class="fh5co-cover " style="background-image: url(/bap/assets/images/about-image.jpg); ">
            <div class="desc animate-box" style="position:relative; top:280px; ">          
            </div>
    </div>
</div>
</div>
    
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-20">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative; top:-22">  
                    <img src="/bap/assets/images/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; "></h1>
                </div>
            </div>    
        </div>
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative; top:-22">  
                    <div style="width: 100%; height: 30px; border-bottom: 1px solid black; text-align: center">
                        <span style="font-size: 40px; background-color: #F3F5F6; padding: 0 10px;">
                        Officers
                        </span>
                    </div>
                    <br><br>
                    <div style="width: 100%; height: 30px; border-bottom: 1px solid black; text-align: center">
                        <span style="font-size: 40px; background-color: #F3F5F6; padding: 0 10px;">
                        Members
                        </span>
                    </div>
                </div>
            </div>    
       </div> 
    </div>
    
    </div>
    </body>  


<?php require_once($root."/bap/html/footer.php"); ?>
