<?php 
  define('PAGE','home')
?><!doctype html><!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>1001 rue Lenoir, Montréal</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/head.inc.php'); ?>
    <link rel="stylesheet" href="/css/filter.css"> <!-- Resource style -->
    <link rel="stylesheet" href="/css/slides.css"> <!-- Featured and Events style -->
  </head>
  <body>
    <main class="cd-main-content">
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/header.inc.php'); ?>

    
     
    
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/featured.inc.php'); ?>

    <div class="row">
      <div class="medium-4 large-4 columns leftcontent">
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/announcements.inc.php'); ?>
      </div>

      <div class="medium-8 large-8 columns rightcontent">
        <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/events.inc.php'); ?>
        
              <div class="select-style cd-select cd-filters">
                <select name="category selectThis" class="filter" id="selectThis">
                  <option value="" selected="selected" data-filter="artist finance foodbeverage media other retail technology travelleisure">Select category</option>
                  <option value=".artist" data-filter="artist">Artist</option>
                  <option value=".finance" data-filter="finance">Finance</option>
                  <option value=".foodbeverage" data-filter="foodbeverage">Food & Beverage</option>
                  <option value=".media" data-filter="media">Media</option>
                  <option value=".other" data-filter="other">Other</option>
                  <option value=".retail" data-filter="retail">Retail</option>
                  <option value=".technology" data-filter="technology">Technology</option>
                  <option value=".travelleisure" data-filter="travelleisure">Travel & Leisure</option>
                </select>
              </div>
          <!-- <input type="search" name="searchtenant"><input type="submit"> -->

                                              <!--       MEMBERS LIST       -->
          <section class="cd-gallery">
            <ul class="boxes_list" id="memberslist">

              <!-- START COPY HERE -->
              
              <li class="small-12 medium-4 large-4 columns member mix media">
                <div class="box_item">
                  <a href="/members/neoinformatics"><div>
                    <span class="helper"></span><img class="box_logo" src="/members/neoinformatics/img/neoinformatics_0.png">
                    <div class="caption"><h3 class="business_name">Business name 2</h3><span class="location">5645 Yonge Street, Toronto, ON, Canada, M2M 3T2</span></div>
                  </div></a>
                </div>
              </li>
              <!-- END HERE -->

              
              <li class="small-12 medium-4 large-4 columns member mix media">
                <div class="box_item">
                  <a><div>
                    <span class="helper"></span><img class="box_logo" src="/members/neoinformatics/img/neoinformatics_0.png">
                    <div class="caption"><h3 class="business_name">Business name 2</h3><span class="location">5645 Yonge Street, Toronto, ON, Canada, M2M 3T2</span></div>
                  </div></a>
                </div>
              </li>

              <li class="small-12 medium-4 large-4 columns mix artist">
                <div class="box_item">
                  <a><div>
                    <span class="helper"></span><img class="box_logo" src="/members/neoinformatics/img/neoinformatics_0.png">
                    <div class="caption"><h3 class="business_name">Business name 3</h3><span class="location">Location</span></div>
                  </div></a>
                </div>
              </li>

              <li class="small-12 medium-4 large-4 columns mix finance" data-cat="finance">
                <div class="box_item">
                  <a><div>
                    <span class="helper"></span><img class="box_logo" src="/members/neoinformatics/img/neoinformatics_0.png">
                    <div class="caption"><h3 class="business_name">Business name 4</h3><span class="location">Location</span></div>
                  </div></a>
                </div>
              </li>

              <li class="small-12 medium-4 large-4 columns mix foodbeverage" data-cat="foodbeverage">
                <div class="box_item">
                  <a><div>
                    <span class="helper"></span><img class="box_logo" src="/members/neoinformatics/img/neoinformatics_0.png">
                    <div class="caption"><h3 class="business_name">Business name 5</h3><span class="location">Location</span></div>
                  </div></a>
                </div>
              </li>

              <li class="small-12 medium-4 large-4 columns mix other" data-cat="other">
                <div class="box_item">
                  <a><div>
                    <span class="helper"></span><img class="box_logo" src="/members/neoinformatics/img/neoinformatics_0.png">
                    <div class="caption"><h3 class="business_name">Business name 6</h3><span class="location">Location</span></div>
                  </div></a>
                </div>
              </li>

              <li class="small-12 medium-4 large-4 columns mix retail" data-cat="retail">
                <div class="box_item">
                  <a><div>
                    <span class="helper"></span><img class="box_logo" src="/members/neoinformatics/img/neoinformatics_0.png">
                    <div class="caption"><h3 class="business_name">Business name 7</h3><span class="location">Location</span></div>
                  </div></a>
                </div>
              </li>

              <li class="small-12 medium-4 large-4 columns mix technology end" data-cat="technology">
                <div class="box_item">
                  <a><div>
                    <span class="helper"></span><img class="box_logo" src="/members/neoinformatics/img/neoinformatics_0.png">
                    <div class="caption"><h3 class="business_name">Business name 8</h3><span class="location">Location</span></div>
                  </div></a>
                </div>
              </li>

              <div class="cd-fail-message">No results found</div>

              <!-- LAST DIV MUST HAVE "end" as class name -->

            </ul>
          </section>
          <div class="small-12 large-12 columns viewall"><a class="button" href="#">View all</a></div>
        </div>
        
      </div>
    </div>
        
          

    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/footer.inc.php'); ?> 
    </main>
    <script src="/js/jquery-2.1.1.js"></script>
    <script src="/js/jquery.mixitup.min.js"></script>
    <script src="/js/filter.js"></script> <!-- Resource jQuery -->
    <script src="/js/jquery.slides.js"></script>
    
    <script>
      $(function(){
        $("#slides").slidesjs({
          width: 940,
          height: 330,
          navigation: false,
          play: {
            active: true,
              // [boolean] Generate the play and stop buttons.
              // You cannot use your own buttons. Sorry.
            effect: "slide",
              // [string] Can be either "slide" or "fade".
            interval: 5000,
              // [number] Time spent on each slide in milliseconds.
            auto: false,
              // [boolean] Start playing the slideshow on load.
            swap: false,
              // [boolean] show/hide stop and play buttons
            pauseOnHover: true,
              // [boolean] pause a playing slideshow on hover
            restartDelay: 2500
              // [number] restart delay on inactive slideshow
          }

        });
      });
      $(function(){
        $("#slides2").slidesjs({
          width: 940,
          height: 330,
          navigation: false,
          play: {
            active: true,
              // [boolean] Generate the play and stop buttons.
              // You cannot use your own buttons. Sorry.
            effect: "fade",
              // [string] Can be either "slide" or "fade".
            interval: 5000,
              // [number] Time spent on each slide in milliseconds.
            auto: false,
              // [boolean] Start playing the slideshow on load.
            swap: false,
              // [boolean] show/hide stop and play buttons
            pauseOnHover: true,
              // [boolean] pause a playing slideshow on hover
            restartDelay: 2500
              // [number] restart delay on inactive slideshow
          }
        });
      });
    </script>
      
       
      
   
  </body>
</html>
