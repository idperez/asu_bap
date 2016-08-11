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
                        Edit Announcement
                    </span>
                </div>
            </div>    
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-lg-offset-3">
        <div class="input-group">          
            <?php echo $this->Form->create('Event'); ?>
              <div class="form-inline">                  
                 <fieldset>                     
                    <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('name', array(
                            'type' => 'text',
                            'label' => 'Announcement Title',
                            'class' => 'form-control',
                            'maxlength' => 30,
                            'placeholder' => 'Name of Announcement',
                            'id' => 'name',
                            'name' => 'name'));
                        ?>
                    </div>      
                    <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('type', array(
                            'options' => array('Event' => 'Event', 'Opportunity' => 'Opportunity', 'Other' => 'Other'),
                            'class' => 'form-control',
                            'name' => 'type'));
                        ?>
                  </div> 
                 </fieldset>
              </div>   
              <div class="form-inline">
                 <fieldset>        
                    <!--Implement a js time picker to auto fill in the time-->          
                    <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('time', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'name' => 'time'));
                        ?>
                    </div>
                    <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('hours', array(
                            'type' => 'number',
                            'class' => 'form-control',
                            'name' => 'hours'));
                        ?>
                    </div>                
                 </fieldset>
              </div>
              <div class="form-group col-lg-12">
                <?php echo $this->Form->input('description', array(
                    'type' => 'textarea',
                    'class' => 'form-control',
                    'style' => 'resize:none',
                    'maxlength' => 500,
                    'placeholder' => 'List a little bit about the announcement here...',
                    'name' => 'description'));
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