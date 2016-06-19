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
    <div class="fh5co-cover text-center" style="background-image: url(/bap/assets/images/members.jpg); ">
    <div class="desc animate-box" style="position:relative; top:280px; ">          
    </div>
    </div>
    </div>
    </div>
 
    <br>
   
    <div onLoad="document.forms.search.part.focus()">  
    <section id="container" >       
        <section id="main-content" style="margin: 25px;">
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-12">  
                        <h1>Search Users</h1>
                        <form class="form-inline" name="search" role="form" method="POST" onkeypress="return event.keyCode != 13;">                          
                            <div class="form-group">                       
                                <fieldset class="form-group">
                                    <label>Serach By</label>
                                    <select class="form-control" name="searchBy" id="searchBy">
                                      <option value="firstname">First Name</option>
                                      <option value="lastname">Last Name</option>
                                      <option value="email">Email</option>                                 
                                      <option value="major1">Major</option>
                                      <option value="level">Level</option>
                                      <option value="title">Title</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="form-group" >
                                <label class="sr-only" for="searchbox">Search</label>
                                <input id="name" name="name" type="text" class="form-control" placeholder="Search..." autocomplete="off"/>              
                            </div>
                            <div class="form-group">                    
                                <button type="button" class="btn btn-default btnSearch">
                                    <span class="glyphicon glyphicon-search"> </span>
                                </button>                             
                            </div>
                        </form>
                    </div>  
                </div>              
                <div class="row mt">
                    <div class="col-lg-12">
                        <div class="content-panel tablesearch">
                            <section id="unseen">
                                <table id="resultTable" class="table table-bordered table-hover table-condensed">
                                    <thead>
                                        <tr>
                                            <th class="small">First Name</th>
                                            <th class="small">Last Name</th>
                                            <th class="small">Email</th>
                                            <th class="small">Major</th>
                                            <th class="small">Level</th>
                                            <th class="small">Linkedin</th>
                                            <th class="small">Profile</th>
                                            <th class="small">Edit</th>                             
                                        </tr>
                                    </thead>									
                                        <tbody></tbody>
                                    </table>                                                           
                            </section>
                        </div>
                    </div>
                </div>				
            </section>
        </section>
    </section>
    </di></div>
</body>

    </div>
      


<?php require_once($root."/bap/html/footer.php"); ?>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/bap/assets/js/bootstrap.min.js"></script>
<script  src="/bap/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script  src="/bap/scripts/triggers.js"></script>