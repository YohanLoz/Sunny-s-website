<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Sunny's products</title>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/products1.css"/>
    </head>

    <body>
        <header>
            <h1 style="background-color:coral;margin:0;">this is the head (for now)</h1>
        </header>

        <section id="title">
            <h1>Meet the classics.</h1>
            <p class="pcOnly">
                We like to add some color to one of the the most <br/>
                everyday moments of life: putting on your socks.<br/>
                We add literal color by designing simple basic<br/>
                white socks a pop of color.
            </p>
            <p class="mobileOnly">
                We like to add some color to<br/>
                one of the the most everyday<br/>
                moments of life:<br/>
                putting on your socks.<br/>
                <br/>
                We add literal color by designing<br/>
                simple basic white socks a pop<br/>
                of color.
            </p>
        </section>

        <section id="classicStripes" class="product">
            
            <h2>classic:<br/>stripes.</h2>

            <a href="products2.php" class="mobileOnly">learn more ></a> 
            <!--if turned into an overlay: i should probably import it, position fixed, 
            width = viewport, and move it right outside the viewport-->
            
            <div class="scrollingsocks">
                <div>
                    <img src="img/classicStripedSocks.png" alt="striped socks"/> 
                    <img src="img/classicStripedSocks.png" alt="striped socks" class="pcOnly"/>
                </div>
            </div>
            
            <div class="linkcontainer pcOnly">
                <a href="products2.php">learn more ></a>
                <br/>
                <a href="webshop.php" class="pcOnly">our webshop ></a>
            </div>

        </section>

        <section id="classicUni" class="product">

            <a href="products2.php" class="mobileOnly">learn more ></a>
            <h2>classic:<br/>uni color.</h2>
            
            <div class="scrollingsocks">
                <div>
                    <img src="img/classicUniColorSocks.png" alt="unicolor socks"/>
                    <img src="img/classicUniColorSocks.png" alt="unicolor socks" class="pcOnly"/>
                </div>
            </div>

            <div class="linkcontainer">
                <a href="products2.php" class="pcOnly">learn more ></a>
                <br/>
                <a href="webshop.php">our webshop ></a>
            </div>
        </section>

        <section id="resellers" class="white">

            <h2>Our<br/>Resellers:</h2>
            <p>
                Sunny uses resellers.<br/>
                You can buy your socks from these sites:
            </p>


            <div id="germanResell">
                <h3>in<br/>Germany:</h3>
                <a href="https://www.amazon.de">amazon.de ></a>
            </div>

            <div id="dutchResell">
                <h3>in the<br/>Netherlands:</h3>
                <a href="https://www.hema.com">hema.com ></a>
                <br/>
                <a href="https://www.bol.com">bol.com ></a>
            </div>

        </section>

    </body>
 
</html>