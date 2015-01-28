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
            $message .= $email."\n";
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
    <title>H20 MMA - 1001 rue Lenoir, Montréal</title>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/head.inc.php'); ?>

  </head>
  <body>
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/header.inc.php'); ?>
    

    
     
    <div class="row cover-container">
      <div class="cover">
        <span class="helper"></span><img src="img/h20mma3.jpg">
      </div>
    </div>

    <div class="row profile-description">
      <div class="large-12 column">
        <div class="medium-12 large-3 columns profile-infos">
          <div class="profile-pic">
            <span class="helper"></span><img src="img/h20mma_0.png">
          </div>
          <h2 class="profile-name">H20 MMA</h2>
          <!-- <h2><small>Optionnal subtitle</small></h2> -->
          <span class="profile-category">(Other)</span><br>
          <span class="profile-location">Suite A-322</span><br>
          <span class="profile-phone">514-814-9006</span>
          <div class="social-icons">
            <a href="https://www.facebook.com/h2omma?ref_type=bookmark" onclick="return ! window.open(this.href);" class="social-icon" title="Facebook"><i class="social foundicon-facebook"></i></a>
            <a href="http://instagram.com/h2omma" onclick="return ! window.open(this.href);" class="social-icon" title="Instagram"><i class="social foundicon-instagram"></i></a>
            <a href="https://www.youtube.com/user/filmricky" onclick="return ! window.open(this.href);" class="social-icon" title="Youtube"><i class="social foundicon-youtube"></i></a>
          </div>
        </div>
        <div class="medium-6 large-6 columns">
          <div class="top-icon"><i class="social foundicon-torso"></i></div>
          <h2>Description:</h2>
          <p>H2O MMA, known for their friendly, skilled and humble atmosphere makes every class fun and enjoyable. "BJJ Black Belt" Mike Lee & "2X UGC Champion" Richard Ho are proud to welcome you to Montreal's #1 Muay Thai Kickboxing, BJJ, MMA & Private Training Gym.</p>
          <h3><b>Gym Membership Prices (For Non Group Class Members)</b></h3>
          <ul>
            <li><span class="pumpkin">1 Day Pass = 15$</span></li>
            <li><span class="pumpkin">3 MONTHS = only 99$</span>.........................Access to all gym equipment during the times above.</li>
            <li><span class="pumpkin">6 MONTHS = only 149$</span>.......................Access to all gym equipment during the times above.</li>
            <li><span class="pumpkin">1 YEAR = only 249$</span>.............................Access to all gym equipment during the times above.</li>
          </ul>
          <p><small>(Taxes not included and classes not included)<br>(See Special deals for Gym Membership and Group Classes below)</small></p>
          <h3><b>Gym Membership Prices *(For Group Class Members)</b></h3>
          <ul>
            <li><span class="pumpkin">1 Day Pass = 10$</span></li>
            <li><span class="pumpkin">3 MONTHS = only 59$</span>.........................Access to all gym equipment during the times above.</li>
            <li><span class="pumpkin">6 MONTHS = only 99$</span>.......................Access to all gym equipment during the times above.</li>
            <li><span class="pumpkin">1 YEAR = only 179$</span>.............................Access to all gym equipment during the times above.</li>
          </ul>
          <p><small>(Taxes not included and classes not included)<br>*(Must have a current group class membership of the following - Women's Kickboxing, Muay Thai Kickboxing, Brazilian Jiu-Jitsu, MMA)<br>*(Above discount membership cannot exceed the duration of your group class membership)</small></p>
          <h3><b>Private Training</b></h3>
          <span class="pumpkin">1 Session = 70$</span>
        </div>
        <div class="medium-6 large-3 columns">
            <div class="top-icon"><i class="general foundicon-clock"></i></div>
            <h2>Business Hours</h2>
            <table class="profile-hours">
              <tr>
                <td>Mon - Thu:</td>
                <td>11AM - 10PM</td>
              </tr>
              <tr>
                <td>Friday:</td>
                <td>11AM - 8PM</td>
              </tr>
              <tr>
                <td>Saturday:</td>
                <td>11AM to 4PM</td>
              </tr>
            </table>
          
        </div>
      </div>
    </div>

    <div class="row profile-products">
      <div class="large-8 small-centered large-centered columns">
        <ul class="clearing-thumbs small-block-grid-2 medium-block-grid-4 large-block-grid-5" data-clearing>
          <li><a class="th" href="img/h20mma1.jpg"><img src="img/h20mma1.jpg"></a></li>
          <li><a class="th" href="img/h20mma2.jpg"><img src="img/h20mma2.jpg"></a></li>
          <li><a class="th" href="img/h20mma3.jpg"><img src="img/h20mma3.jpg"></a></li>
          <li><a class="th" href="img/h20mma4.jpg"><img src="img/h20mma4.jpg"></a></li>
          <li><a class="th" href="img/h20mma5.jpg"><img src="img/h20mma5.jpg"></a></li>
          <li><a class="th" href="img/h20mma6.jpg"><img src="img/h20mma6.jpg"></a></li>
        </ul>
      </div>
    </div>

    <div class="row profile-contact">

      <div class="large-12 column">
        <h2>Send a message to H20 MMA</h2>        <!-- DON'T FORGET TO CHANGE THE NAME HERE -->
        <form data-abide id="myform" method="post" action="./index.php" name="form">
          <div class="large-6 columns">
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
                  <div class="small-8 columns">
                    <input id="email" name="email" required type="text" value="<?php if (isset($email)) echo $email; ?>" placeholder="Your email" />
                    <small class="error">An email address is required.</small>
                  </div>
                  <div class="small-4 columns">
                    <span class="postfix">@1001lenoir.com</span>
                  </div>
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
            <button type="submit" name="envoi">Send message</button>
          </div>
        </form>
      </div>
    </div>

    
          
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/footer.inc.php'); ?>

        
      
       
    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/foundation/foundation.js"></script>
    <script src="/js/foundation/foundation.clearing.js"></script>
    <script src="/js/foundation/foundation.abide.js"></script>
    <!-- Other JS plugins can be included here -->

    <script>
      $(document).foundation();
    </script>
   
  </body>
</html>
