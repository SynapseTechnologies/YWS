<?php
mysql_connect("127.0.0.1", "root", "") or die(mysql_error());

mysql_select_db("admin") or die(mysql_error());

$query = "SELECT `a_content` FROM `articles`";
$check = mysql_query($query);

$info = mysql_fetch_assoc($check);

echo $info[]
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="author" content="Owner">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>We Are Young , Wild, And look Stunnin | Home</title>
		<link rel="stylesheet" href="main.css"/>
		<link rel="favicon" href="/img/favicon.ico"/>
      <style>
        *{
          margin: 0px;
          padding:0px;
        }
        body{
          background: -moz-linear-gradient(grey, #EFF584, grey);/* black */
          background: -webkit-linear-gradient();
          color:#EFF584;
          width: 1280px;
          height: 1800px;
        }
        #big_wrapper{
        
        }
        hgroup{
          position: fixed;
          background: black;
          width: 1380px;
          height: 120px;
        }
        #hgroup{
          top:0px;
          left:0px;
          z-index: 400;
          opacity: 1;
        }
        #fgroup{
          top:610px;/* 120+120, then 720-240*/
          left:0px;
          text-align: center;
          z-index:200;
        }
        header{
          position: absolute;
          background:black;
          padding:0px;
          margin: 30px;
          z-index: 100;
          opacity: 1;
          width:1280px;
        }
        footer{
          position: absolute;
          background:black;
          padding:6px;
          margin: 32px;
          width:1280px;
        }
        h1{
          position: relative;
          padding: 1.5px;
          left: 20px;
          z-index: -400;
        }
        #h_main{
          margin-top: 22px;
          margin-left: 10px;
          z-index: 100;
        }
        p{
          left: 20px;
          position: relative;
        }
        section{
          background: -moz-linear-gradient#BA9416, grey);/* green*/
          position: absolute;
          width:430px;
          left:260px;
          top: 180px;
          height: 1200px;
        }
        .article_header{
          position: relative;
          width:290px;
          top: 20px;
        }
        #article_1{
          background: black; /*red*/
          width:360px;
          opacity:0.6;
          position: relative;
          left:35px;
          bottom: 0px;
          height:230px;
          border-radius: 5px;
        }
        #a_content{
          background: black; /*purple*/
          width:300px;
          height: 50px;
          position: relative;
          top: 25px;
          
        }
        #a_foot{
          position: absolute;
          left:220px;
        }
        #a_footer{
          width: 300px;
          height: 20px;
          position:relative;
          top: 30px;
        }
        #as_nav{
          background: black; /*orange*/
        }
        aside{
          position:fixed;
          left:0px;
          top:120px;
          height: 600px;
          width: 150px;
          opacity: 1;
          background:black; /*orange, black*/
          z-index: 100;
        }
        #nav{
          position:relative;
          left: 0px;
          bottom: 120px;
          z-index: 100;
          opacity: 1;
          margin:10px;
          height: 435px;
          background: black; /*indigo, black*/
        }
        ol{
          position:relative;
          left: 0px;
          top:60px;
          margin: inherit;
          
          background: black; /*grey*/
          width: 108px;
          height: 300px;
          list-style-type: none;
        }
        .li_aside{
          position:relative;
          right: 13px;
          top:55px;
          margin: 10px;
          padding: 3px;
          opacity:1;
          z-index: 300;
          background: black;/* magnenta, black*/
        }
        a:link{
          color:#EFF584;
          text-decoration:none;
          font-size: 22px;
        }
        a:hover{
          color:#EFF584;
          text-decoration:none;
        }
        a:visited{
          color:#EFF584;
          text-decoration:none;
        }
        a:active{
          color:#EFF584;
          text-decoration:none;
        }
      </style>
	</head>
	
	<body>
		<div id="big_wrapper">
			<hgroup id="hgroup">
				<header id="h_main">
					<h1 id="h1_main">We are Young, Wild, and Look Stunnin</h1>
				</header>
			</hgroup>
			
          <div>
            <section id="section">
              <article id="article_1">
                	<header class="article_header" id="ah1">
                      <h3>Title</h3>
                	</header>
                <p name="a5" id="a_content"><?php ?></p>
                <footer id="a_footer">
                  <p id="a_foot">- by Jake N.</p>
                </footer>
              </article>
              <article id="article_1">
                	<header class="article_header" id="ah1">
                      <h3>Title</h3>
                	</header>
                <p name="a4" id="a_content">Hello World</p>
                <footer id="a_footer">
                  <p id="a_foot">- by Jake N.</p>
                </footer>
              </article>
              <article id="article_1">
                	<header class="article_header" id="ah1">
                      <h3>Title</h3>
                	</header>
                <p name="a3" id="a_content">Hello World</p>
                <footer id="a_footer">
                  <p id="a_foot">- by Jake N.</p>
                </footer>
              </article>
              <article id="article_1">
                	<header class="article_header" id="ah1">
                      <h3>Title</h3>
                	</header>
                <p name="a2" id="a_content">Hello World</p>
                <footer id="a_footer">
                  <p id="a_foot">- by Jake N.</p>
                </footer>
              </article>
              <article id="article_1">
                	<header class="article_header" id="ah1">
                      <h3>Title</h3>
                	</header>
                <p name="a1" id="a_content">Hello World</p>
                <footer id="a_footer">
                  <p id="a_foot">- by Jake N.</p>
                </footer>
              </article>
            </section>
            
            <aside id="as">
              <nav id="nav">
                <ol>
                  <li class="li_aside"><a href="#home">Home</a></li>
                  <li class="li_aside"><a href="/about/">About</a></li>
                  <li class="li_aside"><a href="/contact/">Contact</a></li>
                  <li class="li_aside"><a href="spreadshirt.burdfit.tk">Shop</a></li>
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
