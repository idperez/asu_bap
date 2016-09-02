<script>
function myFunction() {
    var password = prompt("Please enter the password");
    
    if (password != "bapislife") {
        location.href = 'http://www.asubap.com';
    }
}

myFunction();
</script>
<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>

    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-20">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative; top:-22">  
                    <img src="./../app/webroot/img/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; ">
                </div>
            </div>    
        </div>
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative; top:-22">  
                    <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                        <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Welcome Member!
                        </span>
                    </div>
                </div>
        </div>
    </div>
</div>
<div class="row animate-box">
    <div class="col-lg-8 col-lg-offset-4">
        <div class="input-group">          
            <?php echo $this->Form->create('User'); ?>
              <div class="form-inline">                  
                 <fieldset>                     
                    <div class="form-group col-lg-6">
                        <!--TODO - figure out a way to check capital letter of first char for all names before submitting form (possible javascript fix)-->
                        <?php echo $this->Form->input('first_name', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'maxlength' => 24,
                            'placeholder' => 'First Name',
                            'id' => 'first_name',
                            'name' => 'first_name'));
                        ?>
                    </div>      
                    <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('last_name', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'maxlength' => 24,
                            'placeholder' => 'Last Name',
                            'id' => 'last_name',
                            'name' => 'last_name'));
                        ?>                
                    </div>
                 </fieldset>
              </div>   
              <div class="form-inline">
                 <fieldset>                 
                    <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('Email', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'maxlength' => 34,
                            'placeholder' => 'example@asu.edu',
                            'name' => 'username'));
                        ?>
                    </div>
                    <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('level', array(
                            'value' => 'Member',
                            'type' => 'hidden',
                            'name' => 'level'));
                        ?>
                  </div>               
                 </fieldset>
              </div>
              <div class="form-group col-lg-12">
                <?php echo $this->Form->input('password', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'maxlength' => 24,
                            'placeholder' => 'Password',
                            'name' => 'password'));
                ?>
              </div>                           
              </div>             
              <div class="form-group col-lg-12">         
                <?php echo $this->Form->end(array('label' => 'Submit', 
                            'class' => 'btn btn-primary', 
                            'name' => 'submit')); 
                ?>                  
              </div>              
            </form>         
        </div>
    </div>
</div>