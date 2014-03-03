<?php 

 // Connects to your Database 

mysql_connect("127.0.0.1", "root", "") or die(mysql_error());

mysql_select_db("admin") or die(mysql_error());

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 

 

 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: login.php"); 

 			} 


//otherwise they are shown the admin area	 

 	else 

 			{ 
?>

<html>
<head><title>Add text to the Home Page</title></head>
The Synapse Admin Area<p>

Your Content<p>
<form action="members.php" method="GET">
<label>Articles:</label>
<label>Article 1:</label>
<label>Article Title:</label>
<input type="text" name="a_title" />
<label>Article content:</label>
<textarea rows="6" cols="11" name="a_content1"></textarea>

<br>
<br>

<label>Article 2:</label>
<label>Article Title:</label>
<input type="text" name="a_title" />
<label>Article content:</label>
<textarea rows="6" cols="11" name="a_content2"></textarea>

<br>
<br>


<label>Article 3:</label>
<label>Article Title:</label>
<input type="text" name="a_title" />
<label>Article content:</label>
<textarea rows="6" cols="11" name="a_content3"></textarea>

<br>
<br>


<label>Article 4:</label>
<label>Article Title:</label>
<input type="text" name="a_title" />
<label>Article content:</label>
<textarea rows="6" cols="11" name="a_content4"></textarea>

<br>
<br>


<label>Article 5:</label>
<label>Article Title:</label>
<input type="text" name="a_title" />
<label>Article content:</label>
<textarea rows="6" cols="11" name="a_content5"></textarea>

<br>
<input type="submit" name="submit" value="submit"/>
</form>
<br>
<a href=logout.php>Logout</a>

<div>
<?php
$submit = $_GET['submit'];
$a1 = $_GET['a_content1'];
$a2 = $_GET['a_content2'];
$a3 = $_GET['a_content3'];
$a4 = $_GET['a_content4'];
$a5 = $_GET['a_content5'];
if(isset($submit)){
    $query = "INSERT INTO `articles`(`a_content`, `a_title`)";
	mysql_query();
}

?>
</div>

</html>


<?php
 			} 



 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: login.php"); 

 } 

 ?> 













