<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>EL Makeup</title>
    <link rel="stylesheet" href="css\index.css">
</head>
<body>
<div class="main-container">
    <?php
    
    include 'topMenu.php';

?>
<main>
    <section class="presentation">
        <div class="introduction">
            <div class="intro-text">
                <h1><b>Welcome.</b></h1>
                <p><i> Everything you need to know about
                    the beauty world & trends. Makeup reviews, tutorials, beauty tips & so much more.
                <br><b>Log in or sign in to get started</b></br> </i>
                </p>
            </div>
            <div class="cta">
                <button class="cta-select" onclick="window.location.href='SignUp.php'">Sign Up</button>
                <button class="cta-add" onclick="window.location.href='LogIn.php'">Log In</button>
            </div>
        </div>
    
        <div class="w3-content w3-section" style="max-width:500px">

       <img class="mySlides w3-animate-fading" src="pictures/makeproduct1.jpg" style="width:100%">
       <img class="mySlides w3-animate-fading" src="pictures/look2.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="pictures/makeproduct5.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="pictures/look8.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000);    
}
</script>
    </script>
    </section>
</main>
<?php
    
    include 'footer.php';

?>
</div>

</html>