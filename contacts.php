<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Sichuan Impression</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link href="https://fonts.googleapis.com/css?family=Anton|Archivo+Black" rel="stylesheet">
</head>
<body id="contacts-body">
	<header id="header">
		<nav id="header-navigation" class="header-navigation">
			<a href="main.html">HOME</a>
			<a href="about.html">ABOUT</a>
			<a href="products.html">PRODUCTS</a>
			<a href="News.html">NEWS</a>
			<a href="Contacts.html">CONTACTS</a>				
		</nav>
	</header>
	<main id="contacts-main" class="main">
		<section id="contacts-section">
			<div id='map' class="contacts-component"></div>
		</section>
	</main>
	<aside id="contracts-aside">
		<div id="address">
			<h3>Our Address</h3>

<?php
$myfile = fopen("address.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
   echo fgets($myfile) . "<br>" ;
}
fclose($myfile);
?>

		</div>

			<div id="office-hours">
				<p><strong>Phone Number</strong></p>
				<p>
				<?php
					echo "hello world.";
				?>
				</p>
				
				<p>408-666-8888</p>
				<p><strong>Office Hours:</strong></p>
				<p>Monday &#8211; 9:30 am &#8211; 8:30 pm</p>
				<p>Tuesday &#8211; 9:30 am &#8211; 9:00 pm</p>
				<p>Wednesday &#8211; 9:30 am &#8211; 8:30 pm</p>
				<p>Thursday &#8211; 9:30 am &#8211; 9:00 pm</p>
				<p>Friday &#8211; 9:30 am &#8211; 8:30 pm</p>
				<p>Saturday &#8211; 8:30 am &#8211; 3:30 pm</p>
				<p>Sunday &#8211; 2:00 pm &#8211; 7:30 pm</p>
		</div>
		</aside>
</body>
</html>