<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
    <div class="desc animate-box" style="position:relative; top:280px; "></div>
</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-40">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center">  
                    <img src="./../../app/webroot/img/profile_logo.png"  alt="profile_logo" height="120">
                </div>
            </div>    
       </div>
    </div>
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center" style="position:relative; top:-22">  
                    <div style="width: 100%; height: 20px; border-bottom: 1px solid black; text-align: center">
                        <span style="font-size: 30px; background-color: #F3F5F6; padding: 0 10px;">
                        Edit Profile
                        </span>
                    </div>
                </div>
        </div>
</div>
    </div>
    <div class="row animate-box" style="position:relative; top:-60;">
        <div class="col-lg-8 col-lg-offset-3">
            <div class="input-group">          
                <?php echo $this->Form->create('User'); ?> 
                <div class="form-inline">
                    <fieldset>                 
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('first_name', array(
                                'type' => 'text',
                                'class' => 'form-control',
                                'maxlength' => 50,
                                'placeholder' => 'First Name',
                                'name' => 'first_name'));
                            ?>
                        </div>
                        <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('last_name', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'maxlength' => 30,
                            'placeholder' => 'Last Name',
                            'name' => 'last_name'));
                        ?>
                        </div>               
                    </fieldset>
                </div>  
                <div class="form-inline">
                    <fieldset>                 
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('username', array(
                                'type' => 'email',
                                'class' => 'form-control',
                                'maxlength' => 50,
                                'placeholder' => 'example@asu.edu',
                                'name' => 'username'));
                            ?>
                        </div>
                        <div class="form-group col-lg-6">
                        <?php echo $this->Form->input('password', array(
                            'type' => 'text',
                            'class' => 'form-control',
                            'maxlength' => 30,
                            'placeholder' => 'Password',
                            'name' => 'password',
                            'value' => ''));
                        ?>
                        </div>               
                    </fieldset>
                </div>    
                <div class="form-inline">
                    <fieldset>                 
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('linkedin', array(
                                'type' => 'url',
                                'class' => 'form-control',
                                'maxlength' => 200,
                                'placeholder' => 'LinkedIn Url',
                                'name' => 'linkedin'));
                            ?>
                        </div>
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('phone', array(
                                'type' => 'tel',
                                'class' => 'form-control',
                                'maxlength' => 10,
                                'placeholder' => 'Phone Number',
                                'name' => 'phone'));
                            ?>
                        </div>               
                    </fieldset>
                </div>  
                <div class="form-inline">
                    <fieldset>                 
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('graduated', array(
                                'options' => array('No', 'Yes'),
                                'class' => 'form-control',
                                'name' => 'graduated'));
                            ?>
                        </div>
                        <div class="form-group col-lg-6">
                            <!--Loop through to generate years (max age is currently 120)-->
                            <?php $years = array(); //stores all years needed for list
                            $currYear = date('Y'); //gets current year 
                            $lastYear = $currYear + 10; //gets earliest year we want to list
                            for($currYear; $currYear < $lastYear; $currYear++) 
                                array_push($years, $currYear); ?>
                            <?php echo $this->Form->input('graduation_year', array(
                                'options' => $years,
                                'class' => 'form-control',
                                'name' => 'graduation_year'));
                            ?>
                        </div>               
                    </fieldset>
                </div> 
                <div class="form-inline">
                    <fieldset>                 
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('graduation_semester', array(
                                'options' => array('Unknown' => 'Unknown', 'Spring' => 'Spring', 'Summer' => 'Summer', 
                                    'Fall' => 'Fall'),
                                'class' => 'form-control',
                                'name' => 'graduation_semester'));
                            ?>
                        </div>
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('city', array(
                                'type' => 'text',
                                'class' => 'form-control',
                                'maxlength' => 100,
                                'placeholder' => 'City of Birth',
                                'name' => 'city'));
                            ?>
                        </div>
                    </fieldset>
                </div>
                <div class="form-inline">
                    <fieldset>                     
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('state', array(
                                'options' => array( 
                                    'Alabama' => 'Alabama', 'Alaska' => 'Alaska', 'Arizona' => 'Arizona', 'Arkansas' => 'Arkansas', 
                                    'California' => 'California', 'Colorado' => 'Colorado', 'Connecticut' => 'Connecticut', 
                                    'Delaware' => 'Delaware', 'District of Columbia' => 'District of Columbia', 'Florida' => 'Florida', 
                                    'Georgia' => 'Georgia', 'Hawaii' => 'Hawaii', 'Idaho' => 'Idaho', 'Illinois' => 'Illinois', 
                                    'Indiana' => 'Indiana', 'Iowa' => 'Iowa', 'Kansas' => 'Kansas', 'Kentucky' => 'Kentucky', 
                                    'Louisiana' => 'Louisiana', 'Maine' => 'Maine', 'Maryland' => 'Maryland', 'Massachusetts' => 'Massachusetts', 
                                    'Michigan' => 'Michigan', 'Minnesota' => 'Minnesota', 'Mississippi' => 'Mississippi', 'Missouri' => 'Missouri', 
                                    'Montana' => 'Montana', 'Nebraska' => 'Nebraska', 'Nevada' => 'Nevada', 'New Hampshire' => 'New Hampshire', 
                                    'New Jersey' => 'New Jersey', 'New Mexico' => 'New Mexico', 'New York' => 'New York', 
                                    'North Carolina' => 'North Carolina', 'North Dakota' => 'North Dakota', 'Ohio' => 'Ohio', 
                                    'Oklahoma' => 'Oklahoma', 'Oregon' => 'Oregon', 'Pennsylvania' => 'Pennsylvania', 
                                    'Rhode Island' => 'Rhode Island', 'South Carolina' => 'South Carolina', 'South Dakota' => 'South Dakota', 
                                    'Tennessee' => 'Tennessee', 'Texas' => 'Texas', 'Utah' => 'Utah', 'Vermont' => 'Vermont', 
                                    'Virginia' => 'Virginia', 'Washington' => 'Washington', 'West Virginia' => 'West Virginia', 
                                    'Wisconsin' => 'Wisconsin', 'Wyoming' => 'Wyoming'),
                                'class' => 'form-control',
                                'name' => 'state'));
                            ?>
                        </div>   
                        <div class="form-group col-lg-6">
                            <?php 
                            if(AuthComponent::user('level') == 'Admin') {
                            echo $this->Form->input('title', array(
                                'options' => array( 'Member' => 'Member', 'Candidate' => 'Candidate', 'Officer' => 'Officer', 
                                    'Alumni' => 'Alumni'),
                                'class' => 'form-control',
                                'name' => 'title'));
                            }
                            ?>
                        </div>            
                    </fieldset>
                </div>
                <div class="form-inline">
                    <fieldset>                 
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('major', array(
                                'type' => 'text',
                                'class' => 'form-control',
                                'maxlength' => 100,
                                'placeholder' => 'Separate each major by a comma.',
                                'name' => 'major'));
                            ?>
                        </div>
                        <div class="form-group col-lg-6">
                            <?php echo $this->Form->input('minor', array(
                                'type' => 'text',
                                'class' => 'form-control',
                                'maxlength' => 100,
                                'placeholder' => 'Separate each minor by a comma.',
                                'name' => 'minor'));
                            ?>
                        </div>
                    </fieldset>
                </div>
                <div class="form-inline">
                    <fieldset>                 
                        <div class="form-group col-lg-12">
                            <?php echo $this->Form->input('bio', array(
                                'type' => 'textarea',
                                'class' => 'form-control',
                                'style' => 'resize:none',
                                'maxlength' => 500,
                                'placeholder' => 'List a little bit about yourself here...',
                                'name' => 'bio'));
                            ?>
                        </div>            
                    </fieldset>
                </div> 
                <br>
            </div>               
            <div class="form-group col-lg-6">        
              <?php echo $this->Form->end(array('label' => 'Save', 
                          'class' => 'btn btn-primary', 
                          'name' => 'submit')); 
              ?>   
            </div>
            <div class="form-group col-lg-6">
                <?php echo $this->Form->input('level', array(
                    'options' => array('Candidate' => 'Candidate', 'Member' => 'Member', 'Officer' => 'Officer', 'Alumni' => 'Alumni'),
                    'class' => 'form-control',
                    'name' => 'level',
                    'type' => 'hidden'));
                    ?>                    
            </div>                         
        </div>
    </div>