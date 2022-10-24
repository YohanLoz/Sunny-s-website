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
			<a href="index.html" class="toplink1">Home</a>
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
	
	
	$randome_variable = rand(0,4);
	$facts = array("Best socks in the univers","Number 1 sock distributor","Socks like your grandma used","Best design in the world","Sunny socks X NHL Stenden");
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
 

