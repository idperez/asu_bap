<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>
<?php require_once($root."/bap/php/member/MemberList.php"); ?>

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
                <div class="animate-box text-left" style="position:relative; top:-22">  
                    <h1 style="display:inline; font-size: 40px; color: black;">Isidro Perez - <h4 style="display:inline; font-size: 30px; color: grey"> Director of Recruitment </h4><img src="/bap/assets/images/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; float: right"></h1>
                </div>
            </div>    
       </div>
    </div>
    <hr style="position:relative; top:-100px">
        <div class="container" style="position:relative; top:-50px">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="fh5co-offcanvas text-center animate-box">
                       <img src="/bap/assets/profile_pics/Perez, Isidro.jpg" style="padding:1px;border:thin solid black;" alt="profile_pic" height="400" width="370" >

                      
                    </div>
                </div>
                <div container="container">
                <div class="col-md-8 col-sm-8">
                    <div class="fh5co-grid text-nowrap animate-box">
                            <h3 style="display:inline; color: black;">Class &nbsp;&nbsp; <h4 style="display:inline; color: grey;"> 2017 </h4></h3>
                            <br><br>
                            <h3 style="display:inline; color: black;">Major &nbsp;&nbsp;<h4 style="display:inline; color: grey;">Software Engineering</h4></h3>
                            <br><br>
                            <h3 style="display:inline; color: black;">Email &nbsp;&nbsp;<h4 style="display:inline; color: grey;">isidro.perez@live.com</h4></h3>  
                            <br><br>
                            <h3 style="display:inline; color: black;">Hometown &nbsp;&nbsp;<h4 style="display:inline; color: grey;">Seattle, WA</h4></h3> 
                            <br><br>
                                <table style="table-layout: fixed; width: 100%;">
                                    <tr>
                                        <td style="word-wrap: break-word">                      
                                        <h4 style="color: grey; word-wrap: break-word; ">Isidro Perez is a software engineering major at the Ira Fulton Schools of Engineering at Arizona State University, he enjoys to play dodgeball and hack on new websites. </h4>
                                    </td>
                                    </tr>
                                </table>
                            <a target="_blank" href='http://www.linkedin.com'>
                           
                           <img alt="connect with me on linkedin" src="/bap/assets/images/linkedin.png" border=0 height="50" width="50" style="float: left;">            
                       </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <a href="acrobat_file.pdf">pdf file</a>
    </body>
<?php require_once($root."/bap/html/footer.php"); ?>