<?php 
  define('PAGE','home')
?><!doctype html><!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>1001 rue Lenoir, Montréal</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/head.inc.php'); ?>

  </head>
  <body>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/header.inc.php'); ?>

    
     
    
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/featured.inc.php'); ?>

    <div class="row">
      <div class="medium-4 large-4 columns leftcontent">
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/announcements.inc.php'); ?>
      </div>

      <div class="medium-8 large-8 columns rightcontent">
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/events.inc.php'); ?>
        <div class="boxes_section">
          <select name="category">
            <option value="" disabled="disabled" selected="selected">Select category</option>
            <option value="artist">Artist</option>
            <option value="finance">Finance</option>
            <option value="foodbeverage">Food & Beverage</option>
            <option value="media">Media</option>
            <option value="other">Other</option>
            <option value="retail">Retail</option>
            <option value="technology">Technology</option>
            <option value="travelleisure">Travel & Leisure</option>
          </select>
          <!-- <input type="search" name="searchtenant"><input type="submit"> -->

                                              <!--       MEMBERS LIST       -->
          <ul class="boxes_list">

            <!-- START COPY HERE -->
            <div class="small-6 medium-4 large-4 columns">
              <li class="box_item">
                <a><div>
                  <span class="helper"></span><img class="box_logo" src="members/neoinformatics/img/neoinformatics_0.png">
                  <div class="caption"><h3 class="business_name">Business name</h3><span class="location">Suite B-521</span></div>
                </div></a>
              </li>
            </div>
            <!-- END HERE -->

            <div class="small-6 medium-4 large-4 columns">
              <li class="box_item">
                <a><div>
                  <span class="helper"></span><img class="box_logo" src="members/neoinformatics/img/neoinformatics_0.png">
                  <div class="caption"><h3 class="business_name">Business name 2</h3><span class="location">5645 Yonge Street, Toronto, ON, Canada, M2M 3T2</span></div>
                </div></a>
              </li>
            </div>

            <div class="small-6 medium-4 large-4 columns">
              <li class="box_item">
                <a><div>
                  <span class="helper"></span><img class="box_logo" src="members/neoinformatics/img/neoinformatics_0.png">
                  <div class="caption"><h3 class="business_name">Business name 3</h3><span class="location">Location</span></div>
                </div></a>
              </li>
            </div>

            <div class="small-6 medium-4 large-4 columns">
              <li class="box_item">
                <a><div>
                  <span class="helper"></span><img class="box_logo" src="members/neoinformatics/img/neoinformatics_0.png">
                  <div class="caption"><h3 class="business_name">Business name 4</h3><span class="location">Location</span></div>
                </div></a>
              </li>
            </div>

            <div class="small-6 medium-4 large-4 columns">
              <li class="box_item">
                <a><div>
                  <span class="helper"></span><img class="box_logo" src="members/neoinformatics/img/neoinformatics_0.png">
                  <div class="caption"><h3 class="business_name">Business name 5</h3><span class="location">Location</span></div>
                </div></a>
              </li>
            </div>

            <div class="small-6 medium-4 large-4 columns">
              <li class="box_item">
                <a><div>
                  <span class="helper"></span><img class="box_logo" src="members/neoinformatics/img/neoinformatics_0.png">
                  <div class="caption"><h3 class="business_name">Business name 6</h3><span class="location">Location</span></div>
                </div></a>
              </li>
            </div>

            <div class="small-6 medium-4 large-4 columns">
              <li class="box_item">
                <a><div>
                  <span class="helper"></span><img class="box_logo" src="members/neoinformatics/img/neoinformatics_0.png">
                  <div class="caption"><h3 class="business_name">Business name 7</h3><span class="location">Location</span></div>
                </div></a>
              </li>
            </div>

            <div class="small-6 medium-4 large-4 columns end">
              <li class="box_item">
                <a><div>
                  <span class="helper"></span><img class="box_logo" src="members/neoinformatics/img/neoinformatics_0.png">
                  <div class="caption"><h3 class="business_name">Business name 8</h3><span class="location">Location</span></div>
                </div></a>
              </li>
            </div>

            <!-- LAST DIV MUST HAVE "end" as class name -->

          </ul>
          <div class="small-12 large-12 columns viewall"><a class="button" href="#">View all</a></div>
        </div>
        
      </div>
    </div>
        
          

    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/footer.inc.php'); ?> 

        
      
       
      
   
  </body>
</html>
