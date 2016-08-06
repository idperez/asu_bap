<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" style="background-image: url(./../app/webroot/img/brothers.jpg); ">
        <div class="desc animate-box" style="position:relative; top:200px; ">    
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $this->Form->create('Prospective'); ?>
                        <div style=" margin: 0 auto; width:80%;">
                            <div class="text-center"><h2>One Step Closer</h2></div>
                            <h3 style="font-style: italic; color: white;">Opportunity Opens Its Doors One Form At A Time</h3>
                            <br>
                            <div class="form-group col-lg-4 col-lg-offset-4">
                                <?php echo $this->Form->input('first_name', array(
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'maxlength' => 30,
                                    'placeholder' => 'First Name',
                                    'id' => 'first_name',
                                    'name' => 'first_name'));
                                ?>
                                <br>
                                <?php echo $this->Form->input('last_name', array(
                                    'type' => 'text',
                                    'class' => 'form-control',
                                    'maxlength' => 30,
                                    'placeholder' => 'Last Name',
                                    'id' => 'last_name',
                                    'name' => 'last_name'));
                                ?>
                                <br>
                                <?php echo $this->Form->input('email', array(
                                    'type' => 'email',
                                    'class' => 'form-control',
                                    'maxlength' => 30,
                                    'placeholder' => 'Email',
                                    'id' => 'email',
                                    'name' => 'email'));
                                ?>
                                <br>
                                <?php $objDateTime = new DateTime('NOW'); ?>
                                <?php echo $this->Form->input('time', array(
                                    'type' => 'hidden',
                                    'id' => 'time',
                                    'value' => $objDateTime->format('c'),
                                    'name' => 'time'));
                                ?>
                                
                                <?php echo $this->Form->end(array('label' => 'Submit', 
                                    'class' => 'btn btn-primary', 
                                    'name' => 'submit')); 
                                ?>
                                <br>
                            </div>         
                        </form>  
                        <div class="col-lg-8 col-lg-offset-2" >
                            <h3 class="text-center" style="font-style: italic; color: white;">Note, while this form does not register you for ASU BAP for the Fall 2016 Semester, filling this affirm out will let you know when the Fall 2016 Application is open!  Thank you for reaching out!</h3>
                        </div>
                    </div>
                </div>                     
            </div>
        </div>
    </div>
</div>	


