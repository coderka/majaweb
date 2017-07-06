<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>majaweb - web developer</title>
    <link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One|Tenor+Sans|Work+Sans" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> 
	<link rel="icon" href="images/logo.gif" type="image/gif" sizes="16x16">
</head>
<body class="#" onload="startTime()">
<header>
	<div class="header">
		<div class="logo"><img src="images/logo.png" alt="logo"/></div>
	    <nav>
        <ul class="menu">
            <li><a href="?page=home">Home</a></li>
            <li class="dropdown"><a href="?page=about"><span>About</span></a>
                <ul class="about-menu">   <!-- start of submenu -->
					<li> <a href="?page=blog">Blog</a></li>
                    <li> <a href="?page=projects">Projects</a></li>
                    <li> <a href="?page=services">Services</a></li>
                    <li> <a href="?page=contact">Contact</a></li>
                </ul>					<!-- end of submenu -->
            </li>
			<li><a href="?page=projects">Projects</a></li>
			<li><a href="?page=services">Services</a></li>
			<li><a href="?page=contact">Contact</a></li>
        </ul>
    </nav><h1 id="h1description"><em>the best web solutions</em><h1/>
	</div>
</header>
	
    <?php 
	
    $page = filter_input(INPUT_GET, 'page', FILTER_UNSAFE_RAW);
    if (empty($page)) {
        $page = 'home';
    }
    $page = 'pages/' . basename($page). '.php';
    
    include $page;
	
    
   /*if ($_GET['page'] == 'home') {
       include 'pages/home.php';
   } elseif ($_GET['page'] == 'about') {
       include 'pages/about.php';
   }*/
     ?>
	    
 
        <script src="script.js"></script>
		
<footer>
<p>Copyright © 2017 majaweb</p>
</footer>

</body>
</html>