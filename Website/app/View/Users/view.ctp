
<div class="fh5co-hero-ish">
    <div class="fh5co-overlay"></div>
    <div class="desc animate-box" style="position:relative; top:280px; "></div>

</div>
<div id="fh5co-work-section" >
    <div class="container" style="position:relative; top:-40">
        <div class="row" >
            <div class="col-md-12 col-sm-12" >
                <div class="animate-box text-center">  
                    <img src="/bap/Website/app/webroot/img/profile_logo.png"  alt="profile_logo" height="120">
                </div>
            </div>    
       </div>
    </div>
    <div class="container">    
        <div class="row animate-box">
            <div class="col-lg-12 col-md-12 col-sm-12 " style="margin-bottom: 20px">
                <h1 style="display:inline; font-size: 40px; color: black;"><?php echo $user['User']['first_name'] . " " . $user['User']['last_name']; ?><h4 style="display:inline; font-size: 30px; color: grey"> - Director of Internal Communications</h4>
            </div>
            <div class="col-md-4 col-sm-4" >
                <?php $photo = $user['Photo']['url']; ?>
                <div class="fh5co-blog" style="background-image: url(/bap/Website/app/webroot/img/profile_pics/Perez,Isidro.jpg)"></div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="fh5co-grid text-nowrap animate-box">
                    <h3 style="display:inline; color: black;">Class &nbsp;&nbsp; <h4 style="display:inline; color: grey;"> 2017 </h4></h3>
                    <br><br>
                    <h3 style="display:inline; color: black;">Major &nbsp;&nbsp;<h4 style="display:inline; color: grey;">
                    <?php 
                    $majorCount = count($user['Major']);
                    if($majorCount > 0) // members have majors
                    {
                        for($i = 0; $i < $majorCount; $i++)
                        {
                            if($i == 0 || $user['Major'][$i+=1]['name'] == null)
                                echo $user['Major'][$i]['name'];
                            else
                                echo ', ' . $user['Major'][$i]['name'];
                        }
                    }  
                    else 
                    { // members have no majors
                        echo 'Member does not have a major declared yet.';
                    }
                    ?></h4></h3>
                    <br><br>
                    <h3 style="display:inline; color: black;">Email &nbsp;&nbsp;<h4 style="display:inline; color: grey;"><?php echo $user['User']['username'];?></h4></h3>  
                    <br><br>
                    <h3 style="display:inline; color: black;">Hometown &nbsp;&nbsp;<h4 style="display:inline; color: grey;"><?php 
                        $city = $user['User']['city'] ? $user['User']['city'] : null;
                        $state = $user['User']['state'] ? $user['User']['state'] : null;
                        if($city && $state)
                            echo $city . ', ' . $state;
                        else if($city)
                            echo $city;
                        else
                            echo $state;
                        ?></h4></h3> <!--may use ternary here so it doesn't display uneeded commas-->
                    <br><br>
                    <?php $bio = $user['User']['bio']; ?>
                        <table style="table-layout: fixed; width: 100%;">
                            <tr>
                                <td style="word-wrap: break-word">                      
                                <h4 style="color: grey; word-wrap: break-word; "><?php echo $bio; ?></h4>
                            </td>
                            </tr>
                        </table>
                    <span><a class="hvr-wobble-vertical fa fa-linkedin-square fa-3x" aria-hidden="true"  style="color: #bfbfbf;" target="_blank"  href="<?php $user['User']['linkedin'];?>"></a></span>
                    <span><a class="hvr-wobble-vertical fa fa-envelope-square fa-3x" aria-hidden="true" style="color: #bfbfbf;" href='mailto:<?php echo $user['User']['username'];?>'></a></span>
                </div>
            </div>
        </div>
    </div>
</div>