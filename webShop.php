<!DOCTYPE html>
 <html> 
 <head>
 <meta charset="UTF-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/main.css"/>
  <link rel="stylesheet" href="css/webShop.css"/>
 </head> 
 <header>
 <div class="container">
    <div class="grid">
		
		   
		  <img id="logo"src="img/sunny_logos_slogan_blue.png"  alt="logo">
			<a href="index.html" class="toplink1">Home Page</a>
			<a href="here" class="toplink2">About us</a>
			<a href="products1.php" class="toplink3">Products</a>
			<a href="contact.php" class="toplink4">Contact</a>
			
			<button  class="mobilebutton"><div class="circle"></div></button>
		
    </div>
	
	
	

</div>
    
</header>
 <body class="content"> 
 <div class="backButton">
	<a href="products1.php"><img  id="backButton" src="img/Arrow-29.png"  alt="Arrow-29"></a>
	</div>


 <h1 id="here">Sorry, we’re doing some work on the site.</h1>
 <p id="txt">Thank you for being patient!<br> We are doing some work and will add our webshop shortly.</p>
 <div class="webShop"><img id="webShopimg"src="img/webShop.png"  alt="webShop"></div>
<h1 >

	<?php
	
	
	$randome_variable = rand(0,7);
	$facts = array("Did you know? Sunny had an old website created in 1999.","Sunny was the number 1 sock distributor in the Netherlands in 2019.","Did you know that Sunny's old slogan was: Socks like your grandma used","The first sock we know of date back 1500 years.","Sunny's website was created by couple of students in NHL Stenden","With your every fifth purchase we plant a new sapling","People who wear mismatched socks are more likely to be married.","A design on the ankle or side of a sock is called a clock");
	echo $facts[$randome_variable];
	
	?>

</h1>


 
 
 
 <div id="dropdown" class="mobilemeniu">
<ul class="links">
  <li ><a id="up" href="index.html">>Home Page</a></li>
  <li><a  href="products1.php">>Products</a></li>
  <li ><a id="down" href="contact.php">>Contact</a></li>
</ul>
</div>

<script>

            let click = document.querySelector('.mobilebutton');

            let list = document.querySelector('.mobilemeniu');

            click.addEventListener("click",()=>{

                list.classList.toggle('newlist');

            });

        </script>

  
  






 </body> 
 
 
 </html>
 

