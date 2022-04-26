<!DOCTYPE html>

<html lang="en">

<head>
   <title>Foodies</title>
   <meta charset="UTF-8">
   <meta name="description" content="This is the webpage of Foodies">
   <meta name="author" content="Sean, Melvin, Keshav, Saahir">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
   <link rel="stylesheet" href="styles.css">
   <script src="accordian.js"></script>
</head> 


<body style='font-family: oswald;'>

    <div class = "page-container">
      <div class="content-wrap">
        <div class = "header">
          <!-- LOGO -->
          <!-- <li class="nav-li"></li> -->
          <div class="topnav">
               <a href="home.php"><img class = "logo" src="images/logo.png" alt="Logo of Foodies"></a>
               <a href="explore.php">Explore</a>
               <a href="contactus.php">Contact</a>
               <a class="active" href="faq.php">FAQs</a>
               <a href="post.php">Create Post</a>
               <?php echo "<p class='topnav-name push'> Hello " . $_COOKIE["user"] . "</p>"?>
               <a href="signout.php">Sign Out</a>
            </div>
        </div>
  
        <div class = "FAQ">


          <h1>FAQs</h1>
            
          <h2>Can I post non-food pictures?</h2>
          <h3>Foodie is an app meant strictly for food media, so make sure to stick to taking pics of your meals!</h3>
      
          <h2>How do I edit my username and bio?</h2>
          <h3>Go to your profile page by clicking the 'Profile' icon in the navigation bar, signing in, and designing your profile on the directed webpage.</h3>
      
          <h2>How do I get in contact with the Foodies team?</h2>
          <h3> Check our 'Contact Us' for information on our team and our contact information.</h3>
      
          <h2>What happens if I forgot my username or password?</h2>
          <h3>In the case that you have forgotten your login information, an email will be sent to your account email to receive your username or reset your password.</h3>
      
          <h2>How do I interact with friends on Foodies ?</h2>
          <h3>You are able to interact with the people in your life on Foodies by following their accounts, as well as using likes and comments to interact with their posts.</h3>
      
          <h2>How do I get my post on the 'Top Posts' feature?</h2>
          <h3>Our top posts takes the posts with most interaction on our site and displays them on viewers' 'Explore' page. Get all your followers to like and comment on your post to gain more traction and land in our trending posts!</h3>    
          
          <h2>Can I post non-food pictures?</h2>
          <h3>Foodie is an app meant strictly for food media, so make sure to stick the</h3>

          <h2>What makes Foodies different from other social medias?</h2>
          <h3>Unlike other social medias, foodies focuses only on enthusiasts who wish to share their food pictures with others!</h3>

        </div>
      </div>

      <?php
        echo "<form name='contactform' onsubmit='submitFeedback()'> 
        <label id='name' value='Name:'><input value='nameinput' name='name'></label> 
        <label id='name' value='Email:'><input value='emailad' name='email'></label> 
        <label id='name' value='Message:'><input value='comment' name='comment'></label> 
        <label type='button' id='submit' value = 'Submit' onclick='submitFeedback()'></label>
        </form>
        
        <script>
          function submitFeedback(){
            let name = document.forms['contactform']['name'].value;
            let email = document.forms['contactform']['email'].value;
            let comment = document.forms['contactform']['comment'].value;
            if (name == '' || email='' || comment=''){
              alert('You have not filled out all required fields in the form');
            
            else(){ <?php

              $myfile = fopen('comments.txt', 'w') or die('Unable to open file!');

            ?>
              
            }
          }
        </script>

      ?>

      <footer>
        <p>3/6/2022 Melvin, Keshav, Saahir, Sean</p>
      </footer> 

    </div>
  </div>
</body>



 
</html>