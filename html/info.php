<?php $root = realpath($_SERVER["DOCUMENT_ROOT"]); ?>
<?php require_once($root."/bap/includes/connection.php"); ?>
<?php require_once($root."/bap/includes/functions/sessions.php"); ?>
<?php require_once($root."/bap/includes/functions/functions.php"); ?>
<?php require_once($root."/bap/includes/functions/validations.php"); ?>
<?php require_once($root."/bap/php/member/MemberList.php"); ?>

<?php $_SESSION['page'] = "info" ?>
<?php include($root."/bap/html/headers/photo-header.php"); ?>

<div class="fh5co-hero">
        <div class="fh5co-overlay"></div>
        <div class="fh5co-cover text-center" style="background-image: url(/bap/assets/images/brothers.jpg); ">
        <div class="desc animate-box" style="position:relative; top:280px; ">
            <h2>Get Informed</h2>
      
            <h3 style="font-style: italic; color: white;">“By failing to prepare, you are preparing to fail.”</h3>
       
            <h4 style="color: white; position: relative; top: -10px;">- Benjamin Franklin.</h4>	
            <button class="btn-danger">Explore</button>
        </div>
        </div>
        </div>


<div id="fh5co-work">
    <div class="work-wrap">
        <div class="container">
            <div class="fh5co-project-inner row">
                <div class="fh5co-imgs col-md-8 animate-box">
                    <div class="img-holder-2 animate-box">
                        <img src="/bap/assets/images/about-image.jpg" alt="back-1" height="445" width="640">
                    </div>
                    <div class="img-holder-1 animate-box">
                        <img src="/bap/assets/images/ladies.jpg" alt="front-1" height="450" width="650">
                    </div>
                   

                </div>
                <div class="fh5co-text col-md-4 animate-box">
                    <h3>Want To Become A Member?</h3>
                    <h2>Join the club that will elevate you.</h2>
                    <p>See when to apply.</p>
                    <p><a href="/bap/html/join.php" class="btn btn-danger">Join</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div id="fh5co-work-section">
        <div class="container">
        <div class="row">
            <div class="col-md-3 animate-box">
                <h3 class="heading-section">Come Prepared</h3>
                <p>We pride ourselves in our professionalism and ethics, check out these helpful resources </p>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="fh5co-grid animate-box">
           
                                <div class="prod-title">
                                    <h3>World Class Members</h3>
                                    <span>World Class University</span>
                                </div>
                            
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
        <!-- fh5co-work-section -->
		<div id="fh5co-services-section" class="border-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-3 animate-box">
						<h3 class="heading-section">What We Do</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and </p>
					</div>
					<div class="col-md-9 col-sm-12">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-browser"></i></span>
									<h3>Web Development</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-mobile"></i></span>
									<h3>Mobile Apps</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>
							<div class="col-md-4 col-sm-4">
								<div class="services animate-box">
									<span><i class="icon-tools"></i></span>
									<h3>UX Design</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								</div>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
		

</body>



<?php require_once($root."/bap/html/footer.php"); ?>

