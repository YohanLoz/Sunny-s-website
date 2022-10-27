<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Contatcs page</title>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/contact.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    </head>
    <body>
        <header>

            <div class="container">
                <div class="grid">
            
            
                    <img id="logo"src="img/sunny_logos_slogan_blue.png"  alt="logo">
                    <a href="index.html" class="toplink1">Home page</a>
                    <a href="index.html#blueframe" class="toplink2">About Us</a>
                    <a href="products1.php" class="toplink3">Products</a>
                    <a href="contact.php" class="toplink4">Contact</a>
                
                    <button  class="mobilebutton"><div class="circle"></div></button>
            
                </div>
            </div>

        </header>
        <div id="dropdown" class="mobilemeniu">
            <ul class="links">
                <li ><a id="up" href="index.html">> Home Page</a></li>
                <li><a  href="products1.php">> Products</a></li>
                <li ><a id="down" href="contact.php">> Contact</a></li>
            </ul>
        </div>

<section id = toptext>
            <div class="toptxt1"><h1>Stay in touch!<h1>
            </div>

            <div class="toptxt2">
            <p>Stay up to date with the latest news.
            Subscribe to our newsletter.
            <br/>
            You can unsubscribe anytime.</p>
            </div>
</section>

<section id="fillout">
    <form action="functions/phpmailer/send.php" method="post">
        <div class="firstname">
            <label for="firstname"><p>First Name:</p></label>
			<input type="text" name="firstname" />
        </div>
        <div class="lastname">
            <label for="lastname"><p>Last Name:</p></label>
            <input type="text" name="lastname" />
        </div>
        <div class="country">
            <label for="country"><p>Country:</p></label>
            <input type="text" name="country" />
        </div>
        <div class="email">
            <label for="email"><p>Email:</p></label>
            <input type="text" name="email" />
        </div>
</section> 
    <button class="button1" type="submit" name="send"><p>Subscribe</p></button>
</form>

<section class="bottomtxt">
    <h1>Contact us</h1>
</section>

<div class="bottombackground">

<div class="contactrow1div" >
    <section class ="contactrow1">
	
        <div class="pinksock1">
        <img src="img/pinksock.png" alt="pinksock1">

        <p><b>Sales</b><br>
        Suzan Jong <br>+31 6 12 12 12 12<br>
        suzan@sunny.com</p>
        </div>
		
        <div class="greensock1">
        <img src="img/greensock.png" alt="greensock1">
 
        <p><b>Sales</b><br>
        Suzan Jong <br>+31 6 12 12 12 12<br>
        suzan@sunny.com</p>
		</div>
		
    </section>
</div>

<div class="contactrow2div" >
    <section class ="contactrow2">
	
        <div class="pinksock2">
        <img src="img/pinksock.png" alt="pinksock2">

        <p><b>Sales</b><br>
        Suzan Jong <br>+31 6 12 12 12 12<br>
        suzan@sunny.com</p>
        </div>
		
        <div class="greensock2">
        <img src="img/greensock.png" alt="greensock2">
 
        <p><b>Sales</b><br>
        Suzan Jong <br>+31 6 12 12 12 12<br>
        suzan@sunny.com</p> 
		</div>
		
    </section>
</div>
	
<div class="contactrow3div" >
    <section class ="contactrow3">
	
        <div class="pinksock3">
        <img src="img/pinksock.png" alt="pinksock3">

        <p><b>Sales</b><br>
        Suzan Jong <br>+31 6 12 12 12 12<br>
        suzan@sunny.com</p>
        </div>
		
        <div class="greensock3">
        <img src="img/greensock.png" alt="greensock3">
 
		<p><b>Sales</b><br>
        Suzan Jong <br>+31 6 12 12 12 12<br>
        suzan@sunny.com</p> 
		</div>
		
    </section>
</div>

<div class="contactrow4div" >

    <section class ="contactrow4">
        <div class="pinksock4">
        <img src="img/pinksock.png" alt="pinksock4">

        <p><b>Sales</b><br>
        Suzan Jong <br>+31 6 12 12 12 12<br>
        suzan@sunny.com</p>
        </div>
		
        <div class="greensock4">
        <img src="img/greensock.png" alt="greensock4">
 
        <p><b>Sales</b><br>
        Suzan Jong <br>+31 6 12 12 12 12<br>
        suzan@sunny.com</p> 		
		</div>
		
    </section>
</div>

</div>

<footer>
    <script src="functions/header.js"></script>
</footer>
</body>
