<!DOCTYPE html>
<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>
<?php require_once($root."/bap/php/member/MemberList.php"); ?>

<?php $_SESSION['page'] = "index" ?>
<?php include($root."/bap/html/headers/photo-header.php"); ?>

        <div class="fh5co-hero">
            <div class="fh5co-overlay"></div>
            <div class="fh5co-cover text-center" style="background-image: url(/bap/assets/images/tempe.jpg); ">
            <div class="desc animate-box" style="position:relative; top:280px; ">
             
                <img src="/bap/assets/images/logo.png" style="width: 200px; height: 200px;" alt='main'>					
                <span>Beta Tau Chapter</span>
                
                <span ><a class="btn btn-danger" href="#">Donate Today</a></span>
                <div style="position:relative; top: -25px;">
                <a target="_blank" title="find us on Facebook" href="http://www.facebook.com/bapasu">
                    <img alt="follow us on facebook" src="//login.create.net/images/icons/user/facebook_30x30.png" border=0>
                </a>
                <a target="_blank" title="follow me on twitter" href="http://www.twitter.com/asu_bap">
                    <img alt="follow me on twitter" src="//login.create.net/images/icons/user/twitter-b_30x30.png" border=0>
                </a>
                <a target="_blank" title="follow me on instagram" href="http://www.instagram.com/asu_bap">
                    <img alt="follow me on instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram30x30.png" border=0>
                </a>
                </div>
            </div>
            </div>
        </div>

        <div id="fh5co-work-section">
        <div class="container">
        <div class="row">
            <div class="col-md-3 animate-box">
                <h3 class="heading-section">Welcome</h3>
                <p>Beta Alpha Psi is an honorary and professional organization for students of accountancy, finance, and information systems. </p>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="fh5co-grid animate-box" style="background-image: url(/bap/assets/images/home_vertical.jpg);">
                            <a class="image-popup text-center">
                                <div class="prod-title">
                                    <h3>World Class Members</h3>
                                    <span>World Class University</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="fh5co-grid animate-box" style="background-image: url(/bap/assets/images/home_horzontal_1.jpg);">
                            <a class="image-popup text-center">
                                <div class="prod-title">
                                    <h3>Memorable Events</h3>
                                    <span>Arizona's Finest</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="fh5co-grid animate-box" style="background-image: url(/bap/assets/images/home_horizontal_2.jpg);">
                            <a class="image-popup text-center">
                                <div class="prod-title">
                                    <h3>In Touch With The Community</h3>
                                    <span>Always Giving Back</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="fh5co-grid animate-box" style="background-image: url(/bap/assets/images/home_vertical_2.jpg);">
                            <a class="image-popup text-center">
                                <div class="prod-title">
                                    <h3>Strong Minds, Strong Friends</h3>
                                    <span>Lifetime Relationships</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <hr>

        <div id="fh5co-content-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-testimonial text-center animate-box">
                            <h2>Our Mission</h2>
                            <figure>
                                <img src="/bap/assets/images/logo.png" alt="mission">
                            </figure>
                            <blockquote>
                                <p> The organization seeks to develop its members' professionalism through career-oriented, social, and community activities. Being a member of Beta Alpha Psi will provide great opportunities to interact with both  the accounting faculty and members of the professional accounting community.</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="fh5co-about-us animate-box">
                            <h2 class="text-center">About Us</h2>
                            <img src="/bap/assets/images/group_photo.jpg" alt="About Us">
                            <p>Founded in 1919, Beta Alpha Psi is an honor organization for financial information students and professionals. There are over 300 chapters on college and university campuses with over 300,000 members initiated since Beta Alpha Psi's formation. <br><a href="#">Know More About Us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<script src="/bap/js/jquery.min.js"></script>
    <script src="/bap/js/jquery.easing.1.3.js"></script>
    <script src="/bap/js/bootstrap.min.js"></script>
    <script src="/bap/js/jquery.waypoints.min.js"></script>
    <script src="/bap/js/hoverIntent.js"></script>
    <script src="/bap/js/superfish.js"></script>
    <script src="/bap/js/main.js"></script>
