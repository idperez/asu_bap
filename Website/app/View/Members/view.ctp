<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
        <div class="fh5co-cover " style="background-image: url(/bap/assets/images/about-image.jpg); ">
            <div class="desc animate-box" style="position:relative; top:280px; ">          
            </div>
    </div>
</div>
</div>
    <?php print_r($member);?>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-20">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-left" style="position:relative; top:-22">  
                    <h1 style="display:inline; font-size: 40px; color: black;"><?php echo $member['Member']['first_name'] . " " . $member['Member']['last_name'] . " - ";?><h4 style="display:inline; font-size: 30px; color: grey"><?php echo $member['Member']['title'];?></h4><img src="/bap/assets/images/profile_logo.png"  alt="profile_logo" height="120" style="position:relative; top:-35px; float: right"></h1>
                </div>
            </div>    
       </div>
    </div>
    <hr style="position:relative; top:-100px">
        <div class="container" style="position:relative; top:-50px">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="fh5co-offcanvas text-center animate-box">
                       <img src='<?php echo $member['Photo']['url'];?>' style="padding:1px;border:thin solid black;" alt="profile_pic" height="400" width="370" >                      
                    </div>
                </div>
                <div container="container">
                <div class="col-md-8 col-sm-8">
                    <div class="fh5co-grid text-nowrap animate-box">
                            <h3 style="display:inline; color: black;">Class &nbsp;&nbsp; <h4 style="display:inline; color: grey;"> 2017 </h4></h3>
                            <br><br>
                            <h3 style="display:inline; color: black;">Major(s) &nbsp;&nbsp;<h4 style="display:inline; color: grey;">
                            <?php 
                            $majorCount = count($member['Major']);
                            if($majorCount > 0) // members have majors
                            {
                                for($i = 0; $i < $majorCount; $i++)
                                {
                                    if($i == 1 || $member['Major'][$i+=1]['name'] == null)
                                        echo $member['Major'][$i]['name'];
                                    else
                                        echo ', ' . $member['Major'][$i]['name'];
                                }
                            }  
                            else { // members have no majors
                                echo 'Member does not have a major declared yet.';
                            }
                            ?></h4></h3>
                            <br><br>
                            <h3 style="display:inline; color: black;">Email &nbsp;&nbsp;<h4 style="display:inline; color: grey;"><?php echo $member['Member']['email'];?></h4></h3>  
                            <br><br>
                            <h3 style="display:inline; color: black;">Hometown &nbsp;&nbsp;<h4 style="display:inline; color: grey;"><?php echo $member['Member']['city'] . ", " . $member['Member']['state'];?></h4></h3> <!--may use ternary here so it doesn't display uneeded commas-->
                            <br><br>
                                <table style="table-layout: fixed; width: 100%;">
                                    <tr>
                                        <td style="word-wrap: break-word">                      
                                        <h4 style="color: grey; word-wrap: break-word; "><?php echo $member['Member']['bio'];?></h4>
                                    </td>
                                    </tr>
                                </table>
                            <a target="_blank" href='<?php echo $member['Member']['linkedin']; ?>'>
                           
                           <img alt="connect with me on linkedin" src="/bap/assets/images/linkedin.png" border=0 height="50" width="50" style="float: left;">            
                       </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>