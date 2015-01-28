<?php 
  define('PAGE','member')
?>
<?php
    
  
    if(!empty($_POST['envoi'])){

        extract($_POST);
        $valid = true;

        if (empty($name)){
            $valid = false;
            $errorname = "You forgot to write your name";
        }

        if(!preg_match('/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i',$email)) {
            $valid = false;
            $resultmessage = "The e-mail address is not valid";
         
        }

        if (empty($email)){
            $valid = false;
            $erroremail = "You forgot to write your e-mail address";
        }

        if (empty($message)){
            $valid = false;
            $errormessage = "You forgot to write your message";
        }

        if ($valid){
            $to = "jim@neoinformatics.com";         // DON'T FORGET TO CHANGE EMAIL HERE BEFORE LAUCH
            $subject = "Message from ".$name." ,visitor of 1001lenoir.com";
            $header = "";
            $message = stripslashes($message)."\n"."\n";
            $message .= $name."\n";
            $message .= $email;
            $name = stripslashes($name);

            if (mail($to, $subject, $message)) {
                $resultmessage = "Your message is sent successfully";
                unset($name);
                unset($email);
                unset($message);
            }

            else {
                $resultmessage = "An error occured, please try sending your message again";
            }
            // $resultmessage = "Tout est ok";
        }

    }
  
?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <title>Neo Informatics - 1001 rue Lenoir, Montréal</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/head.inc.php'); ?>

  </head>
  <body>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/header.inc.php'); ?>
    

    
     
    <div class="row cover-container">
      <div class="cover">
        <span class="helper"></span><img src="img/neoinformatics3.jpg">
      </div>
    </div>

    <!-- <div class="row profile-infos">
      <div class="small-4 large-4 columns">  
        
      </div>
      <div class="small-8 large-8 columns">

        
      </div>
    </div> -->

    <div class="row profile-description">
      <div class="large-12 column">
        <div class="medium-12 large-3 columns profile-infos">
          <div class="profile-pic">
            <span class="helper"></span><img src="img/neoinformatics_0.png">
          </div>
          <h2 class="profile-name">Neo Informatics</h2>
          <h2><small>Optionnal subtitle</small></h2>
          <span class="profile-category">(Media)</span><br>
          <span class="profile-location">Suite B-521</span><br>
          <span class="profile-phone">514-989-8780</span>
          <div class="social-icons">
            <a href="#" class="social-icon"><i class="social foundicon-facebook"></i></a>
            <a href="#" class="social-icon"><i class="social foundicon-linkedin"></i></a>
            <a href="#" class="social-icon"><i class="social foundicon-twitter"></i></a>
          </div>
        </div>
        <div class="medium-6 large-6 columns">
          <div class="top-icon"><i class="social foundicon-torso"></i></div>
          <h2>Description:</h2>
          <p>Maecenas eu eleifend magna. Maecenas tempor lacus et odio semper, <span class="pumpkin">nec gravida neque</span> volutpat. Duis ut iaculis ipsum, eget scelerisque dolor.</p>
          <p>Vestibulum mollis luctus molestie. Donec id mi bibendum, rhoncus lectus nec, rhoncus arcu. Pellentesque ut orci in urna lacinia euismod vitae eget nibh. Integer at aliquam dolor. Suspendisse et pellentesque magna, et interdum nunc. Curabitur a faucibus neque. Nunc vel arcu viverra, iaculis sem ut, dictum tellus.</p>
          <ul>
            <li>Mauris vel dictum felis.</li>
            <li>Nulla iaculis elit nec justo facilisis.</li>
            <li>Non consectetur risus ullamcorper.</li>
            <li>Donec lacinia neque nec justo auctor molestie.</li>
          </ul>
        </div>
        <div class="medium-6 large-3 columns">
            <div class="top-icon"><i class="general foundicon-clock"></i></div>
            <h2>Business Hours</h2>
            <table class="profile-hours">
              <tr>
                <td>Monday to Tuesday:</td>
                <td>9AM to 5PM</td>
              </tr>
              <tr>
                <td>Friday:</td>
                <td>9AM to 4PM</td>
              </tr>
              <tr>
                <td>Saturday and Sunday:</td>
                <td>Closed</td>
              </tr>
            </table>
          
        </div>
      </div>
    </div>

    <div class="row profile-products">
      <div class="large-8 small-centered large-centered columns">
        <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-4 large-block-grid-5" data-clearing>
          <li><a class="th" href="img/neoinformatics1.jpg"><img src="img/neoinformatics1.jpg"></a></li>
          <li><a class="th" href="img/neoinformatics2.jpg"><img src="img/neoinformatics2.jpg"></a></li>
          <li><a class="th" href="img/neoinformatics1.jpg"><img src="img/neoinformatics1.jpg"></a></li>
          <li><a class="th" href="img/neoinformatics2.jpg"><img src="img/neoinformatics2.jpg"></a></li>
          <li><a class="th" href="img/neoinformatics1.jpg"><img src="img/neoinformatics1.jpg"></a></li>
          <li><a class="th" href="img/neoinformatics2.jpg"><img src="img/neoinformatics2.jpg"></a></li>
          <li><a class="th" href="img/neoinformatics1.jpg"><img src="img/neoinformatics1.jpg"></a></li>
        </ul>
      </div>
    </div>

    <div class="row profile-contact">

      <div class="large-12 column">
        <h2>Send a message to *Profile name here*</h2>        <!-- DON'T FORGET TO CHANGE THE NAME HERE -->
        <form data-abide id="myform" method="post" action="./index.php" name="form" class="large-6 columns">
          <div class="row">
            <div class="large-12 columns">
              <label for="name" >Name:
                <input type="text" id="name" name="name" required pattern="[a-zA-Z]+" value="<?php if (isset($name)) echo $name; ?>" placeholder="Your name/Business name" />
                <small class="error">You forgot to write your name.</small>
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <div class="row collapse">
                <label for="email">Email:</label>
                <div class="small-12 columns">
                  <input id="email" name="email" required type="text" pattern="email" value="<?php if (isset($email)) echo $email; ?>" placeholder="Your email" />
                  <small class="error">An email address is required.</small>
                </div>
                <!-- <div class="small-4 columns">
                  <span class="postfix">@1001lenoir.com</span>
                </div> -->
              </div>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label for="subject">Subject:
                <input id="subject" name="subject" type="text" placeholder="" />
              </label>
            </div>
          </div>
          <div class="row">
            <div class="large-12 columns">
              <label for="message">Message
                <textarea id="message" name="message" required rows="8" placeholder="Your message"><?php if (isset($message)) echo $message; ?></textarea>
              </label>
              <small class="error">You forgot to write your message.</small>
            </div>
          </div>
          <p id="message_to_user">
                              <?php 
                                  if (isset($errorname))
                                      echo $errorname;
                                  if (isset($erroremail))
                                      echo $erroremail;
                                  if (isset($errormessage))
                                      echo $errormessage;
                                  if (isset($resultmessage))
                                      echo $resultmessage;
                              ?>
                          </p>
          <button type="submit" name="envoi">Send message</button>
        </form>
        <div class="large-6 columns">
          <div class="row profile-map">
            <div id="map-canvas" class="bigmap"></div>
          </div>
        </div>
      </div>
    </div>

    
          
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/footer.inc.php'); ?>

        
      
       
    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/foundation/foundation.js"></script>
    <script src="/js/foundation/foundation.clearing.js"></script>
    <script src="/js/foundation/foundation.abide.js"></script>
    <?php include ('map/googlemaps.inc.php'); ?>
    <!-- Other JS plugins can be included here -->

    <script>
      $(document).foundation();
    </script>
   
  </body>
</html>
