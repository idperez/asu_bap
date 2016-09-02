<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
       
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative;">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative;">  
                    <img src="/bap/Website/app/webroot/img/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; ">
                </div>
                <div class="animate-box" style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                    <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Password Recovery
                    </span>
                </div>
            </div>    
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-offset-5 col-lg-12 animate-box" style="position:relative; top:-35px; ">
        <div class="input-group">          
              <div class="form-inline">                  
                 <fieldset>                     
                    <div class="form-group">                       
                        <?php
                        echo $this->Form->create('User');
                        echo $this->Form->input('Email', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'maxlength' => 34,
                            'placeholder' => 'example@asu.edu',
                            'width' => 400,
                            'name' => 'username'));
                        ?>
                    </div>      
                 </fieldset>
              </div>   
            <br>  
              <div class="form-group col-lg-offset-1 col-lg-2">         
                <?php echo $this->Form->end(array('label' => 'Submit', 
                    'class' => 'btn btn-primary', 
                    'name' => 'submit')); 
                ?>                  
              </div>              
            </form>         
        </div>
    </div>
</div>