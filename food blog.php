<!DOCTYPE html>
<html>
<title>Lady In Red Food Blog</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family:Baskerville, "Baskerville Old Face", "Goudy Old Style", Garamond, "Times New Roman", serif;}
.w3-bar-block .w3-bar-item {padding:20px}
.input-element{
height: 400px !important;
width: 800px;
}
</style>
<body>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="http://www.peachpit.com/articles/article.aspx?p=483799&seqNum=7" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16">
		<a href="http://localhost/backboneJSONP-2.html" target="_blank"><img class="facebook-button" align="right"  >Backbone</a>
		<!--<a href="http://twitter.com" target="_blank"><img class="twitter-button" align="right" src="twitter-outline.png" ></a>-->
	</div>
    <div class="w3-center w3-padding-16">Lady In Red Food Blog</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>The Perfect, Classic Sandwich</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="buncha.jpg" alt="Steak" style="width:100%">
      <h3>A Real Bundle Of Bun Cha</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="chinese.jpg" alt="Cherries" style="width:100%">
      <h3>Asian Fusion</h3>
      <p></p>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="cake.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>Piece Of Cake</h3>
      <p></p>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="soba.jpg" alt="Popsicle" style="width:100%">
      <h3>Lola Soba</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="sushi.jpg" alt="Salmon" style="width:100%">
      <h3>Sushi For Your Soul</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="waffle.jpg" alt="Sandwich" style="width:100%">
      <h3>Waffles That Will Warm Your Cockle</h3>
      <p></p>
    </div>
    <div class="w3-quarter">
      <img src="toast.jpg" alt="Croissant" style="width:100%">
      <h3>Tasty Toasty</h3>
      <p></p>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>
  
  <hr id="about">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center">  
    <?php 

   if (isset($_POST['submit'])) { // Handle the form.

      $message = NULL; // Create an empty new variable.

      // Check for a name.
      if (strlen($_POST['name']) > 0) {
         $name = TRUE;
     } else {
         $name = FALSE;
         $message .= '<p>The blog post cannot be blank!</p>';
		 trigger_error("User did not fill up the blog post", E_USER_ERROR);

     }  

     // Check for a username.
     if (strlen($_POST['username']) > 0) {
         $username = TRUE;
     } else {
         $username = FALSE;
         $message .= '<p>You forgot to enter your blog post title!</p>';
	 }
   
     if ($name &&  $username ) { // If everything's okayOK.
         // Register the user.

         // Send an email.
         echo "<h3>Your post is updated successfully</h3>";
     } else {
         $message .= '<p>Please try again.</p>';
     }

  }

  // Set the page title and include the HTML header.
  $page_title = 'Register!';

  // Print the error message if there is one.
  if (isset($message)) {
      echo '<font color="red">', $message, '</font>';
  }
  ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" >
  <legend>Complete your blog post:</legend>

    <p><b>Title:</b> <input type="text" name="username" size="20" maxlength="40" 
value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" /></p>
  <p><input type="text" name="name" class="input-element" maxlength="400" value="<?php 
if (isset($_POST['name'])) echo $_POST['name']; ?>" /></p>
  

  <div align="center"><input type="submit" name="submit" value="Submit Post" /></div>

  </form><!-- End of Form -->

  
  <?php
/*******uploading files*******/
if (count($_FILES)) {
    // Doublecheck that we really had a file:
    if (!($_FILES['attachment']['size'])) {
        echo "<p>ERROR:  No actual file uploaded</p>\n";
    } else {
        // Determine the filename to which we want to save this file:
        $newname = dirname(__FILE__) . '/' .
                basename($_FILES['attachment']['name']);
 // Attempt to move the uploaded file to it's new home:
        if (!(move_uploaded_file($_FILES['attachment']['tmp_name'],
                $newname))) {
            echo "<p>ERROR:  A problem occurred during file upload!</p>\n";
        } else {
            // It worked!
            echo "<p>Done!  The file has been saved as: {$newname}</p>\n";
        }
    }
}
?>
<!--<form action="<?= $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post"
    enctype="multipart/form-data" name="f1"> -->
	<form name="myForm" action="<?= $_SERVER['PHP_SELF'] ?>" onsubmit="return validateForm()" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="8388608" />
<p>Upload Image <input type="file" name="attachment" /></p>
<p><input type="submit" value="Submit Image"/></p>
</form>
  </div>
  <hr>
  
  <!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>Advertisement</h3>
      <p></p>
      <p>Powered by <a href="https://www.facebook.com/" target="_blank">Thang The Developer</a></p>
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="thang.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Thang</span><br>
          <span>Sydney food</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large"><Melbourne food</span><br>
          <span></span>
        </li> 
      </ul>
    </div>

    <div class="w3-third w3-serif">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Japan</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Dinner</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Salmon</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">China</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Drinks</span>
        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Flavors</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Cuisine</span>
     
      </p>
    </div>
  </footer>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
function validateForm() {
    var x = document.forms["myForm"]["attachment"].value;
    if (x == "") {
        alert("No image selected please try again");
        return false;
    }
}
</script>

</body>
</html>
