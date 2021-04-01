<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank you notification</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Blinker&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="headerBar">
        <div class="items">
            <a href="" id="headerLink">News</a>
            <a href="" target="blank" id="headerLink">Intranet</a>
            <div class="langMenu">
                <div class="selected">English</div>
                <ul>
                    <li><a href="main.html" class="Eng">English</a></li>
                    <li><a href="mainSuomi.html" class="Fi">Suomi</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="navLeftPart">
            <div class="home">
                <a href="main.html"><img src="D:\IT\Javascript - html5\Working Project\photo\companylogo.jpg" alt="Logo"></a>
            </div>
            <div class="navLink">
                <a href="" target="blank">Company</a>
                <a href="" target="blank">Products</a>
                <a href="" target="blank">Contact us</a>
                <button type="button" class="glass" onclick="display()">&#128269</button>
            </div>
        </div>
        <div class="navRightPart">
            <input type="text">
            <button onclick="Search()" type="button">Search</button>
        </div>
        <div class="clearFloat"style="clear:both"></div>
    </div>
    <div class="Thank">
        <?php 
            $subject = "Newsletter subscription to Liana Technologies";
            $message = "Dear " .$_POST["email"]. "Thank you for register to our mailbox.". "\r\n". 
                "Don't forget to update our latest news.";
            $headers = "Welcome new subscribers!"
            if(mail($_POST["email"]),$subject,$message,$headers) {
                echo "<h1>Thank you for your subscription!</h1> 
                    <p>We have sent an email to " .$_POST["email"]. 
                    "</p>
                    <p>Check your email frequently to receive our latest news.</p>";
            }
            else {
                echo "<h1>Error</h1><p>Error in sending email to" .$_POST["email"]. "</p>";
            }
        ?>
        <a href="main.html">Return to home page</a>
    </div>
    <footer>
        <div class="contact">
            <h4>Liana Technologies</h4>
            <div>
                <div class="contactInfo">
                    <h5>Sales and inquiries</h5>
                    <p>Email: sales@lianatech.com</p>
                    <p>Phone: +358 10 387 7053</p>
                </div>
                <form method="POST" action="mailto:sales@lianatech.com" class="button">
                    <input type="submit" value="Contact us">
                </form>
            </div>
        </div>
        <div class="sitemap">
            <div class="site">
                <a href="" target="blank">Company</a>
                <a href="" target="blank">Product</a>
                <a href="" target="blank">Contact us</a>
                <a href="">News</a>
            </div>
            <div class="socialMedia">
                <a href="https://www.facebook.com/LianaTechFI/" target="blank">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/company/liana-technologies/?originalSubdomain=fi" target="blank">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/lianatechnologies/" target="blank">
                    <i class="fa fa-instagram"></i>
                </a>
                <a href="https://twitter.com/lianatech_fi" target="blank">
                    <i class="fa fa-twitter"></i>
                </a>
            </div>
        </div>
    </footer>
</body>
</html>