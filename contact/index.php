<?php
if(isset($_GET['email'])){
	
      $email_to = 'jake@burdfit.tk';
      $email_subject = 'BURDFIT';
      $email_message = $_GET['msg'];
      $headers = "From: ".$_GET['email'];
@mail($email_to, $email_subject, $email_message, $headers); 
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="Owner">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Contact | BURDFIT</title>
		<link rel="stylesheet" href="/css/main.css"/>
		<link rel="favicon" href="BURDFIT LOGO.jpg"/>
      
	</head>
	
	<body>
		<div id="big_wrapper">
			<hgroup id="hgroup">
				<header id="h_main">
					<h1 id="h1_main">Contact | BURDFIT</h1>
				</header>
			</hgroup>
			
          <div>
            <section id="section">
              <article id="article_1">
                	<header class="article_header" id="ah1">
                      <h3>Contact Me</h3>
                	</header>
                
                <p id="a_content">
                           <img alt="burdfit" href="/img/Burdfit - Opaque.png"/>
                           <form action="index.php" method="GET">
                                <label for="email">Your Email: </label><input type="email" placeholder="example@email.com" name="email" id="email"/>
                                <br><br>
                                <label for="text area">Your message:</label>
                                <br>
                                <textarea rows="6" cols="100" name="msg" id="msg" placeholer="Put your Message Here!"></textarea><br><br>
                                <input type="submit" value="Send" id="submit"/>
                           </form>
                </p>
                
                        <!--<footer id="a_footer">
                      <p id="a_foot">- by Jake N.</p>
                        </footer>-->
              </article>
            </section>
            
            <aside id="as">
              <nav id="nav">
                <ol>
                  <li class="li_aside"><a href="www.burdfit.tk">Home</a></li>
                  <li class="li_aside"><a href="/about/">About</a></li>
                  <li class="li_aside"><a href="#">Contact</a></li>
                  <li class="li_aside"><a href="spreadshirt.birdfit.tk">Shop</a></li>
                </ol>
              </nav>
            </aside>
          </div>
          
          
			
          	<hgroup id="fgroup">
            	<footer>
              		<p>&copy; Copyright BURDFIT 2013 - 2025</p>
            	</footer>
          	</hgroup>
		</div>
	</body>
</html>
