<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
       
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative;">  
                    <img src="./../../app/webroot/img/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; ">
                </div>
                <div class="animate-box" style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                    <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                    Change Your Profile Picture
                    </span>
                </div>
            </div>    
        </div>
    </div>
    <br><br><br><br>
    <div class="container animate-box">
        <div class="col-lg-12">
            <div class="col-lg-offset-4 col-lg-3">
                <?php $photo = $user['Photo']['url']; ?>
                <div class="fh5co-blog" style="background-image: url(./../../app/webroot/img/profile_pics/Perez,Isidro.jpg); height: 280px; width: 260px;"></div>             
            </div>
            <?php echo $this->Form->create('Photo', array('enctype' => 'multipart/form-data')); ?>
            <div class="col-lg-offset-3 col-lg-5 form-group">
                <div class="input-group">
                    <label class="input-group-btn">
                        <span class="btn btn-primary">
                            <?php echo $this->Form->input('url', array(
                                'label' => '','type' => 'file', 'accept' => 'image/*')); 
                            ?>
                        </span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group col-lg-offset-5 col-lg-6">    
  
              <?php echo $this->Form->end(array('label' => 'Save', 
                'class' => 'btn btn-primary', 
                'name' => 'submit')); 
              ?>                  
            </div> 
    </div>
</div>

