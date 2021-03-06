<?php
if(!session_id())
{
    session_start();
}
?>

<!--@@Language Selector
<div class="language">
    <div class="lan">
        <span class="lan_selection">EN</span>
    </div>
    <div class="lan">
        <span class="lan_selection">SCHI</span>
    </div>
  <div class="lan">
        <span class="lan_selection">TCHI</span>
    </div>
    <div class="lan">
        <span class="lan_selection">VI</span>
    </div>
</div>-->

 <!--@@NAVIGATION PART-->
 <nav class="navbar navbar-default topBarmenu" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-ex1-collapse">
                      <span class="sr-only">Show navigation bar</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="index">
                        <img src="images/logo/paypalLogo.png">
                    </a>
                </div>
                 <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav topNavOptions">
                        <li <?php if($_SERVER['REQUEST_URI']=='/paypalBuilder/index') { echo 'class="active"';} ?>><a class="visiblePage" id="index" href="index"><?php echo $lang["MENU_HOME"];?></a></li>
                        <li class="menulineHide"></li>
                        <li <?php if($_SERVER['REQUEST_URI']=='/paypalBuilder/veprompt') { echo 'class="active"';} ?>><a class="menuUnclick" href="veprompt"><?php echo $lang["MENU_VEPROMPT"];?></a></li>
                        <li class="menuline"></li>
                        <li <?php if($_SERVER['REQUEST_URI']=='/paypalBuilder/vecontact') { echo 'class="active"';} ?>><a class="menuUnclick" href="vecontact"><?php echo $lang["MENU_VECONTACT"];?></a></li>
                        <li class="menuline"></li>
                        <li ><span class="menuUnclick" id="setup"><?php echo $lang["MENU_SET_UP"];?><span></li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right topNavOptions">
                        <li <?php if($_SERVER['REQUEST_URI']=='/paypalBuilder/contactus') { echo 'class="active"';} ?>><a href="contactus" id="contactUs"><?php echo $lang["MENU_CONTACTUS"];?></a></li>
                    </ul>   
                </div>

            </nav>
