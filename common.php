<!DOCTYPE html>
<html>

<?php
    # function that displays the head tag and its contents; title changes depending on page
    function headHTML($title) {
?>

	<head>
		<meta charset="utf-8">
    	<title><?= $title # parameter changes title?></title>
    	<link rel="stylesheet" href="css/normalize.css">
    	<link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' 
    	rel='stylesheet' type='text/css'>
    	<link rel="stylesheet" href="css/index.css">
    	<link rel="stylesheet" href="css/responsive.css">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="js/loadcontent.js"></script>
	</head>

<?php } 

    # function that displays the navigation and title bar
    function navigation() {
?>

    <header>
        <a href="index.php" id="logo">
            <h1>Kimberly Bautista</h1>
            <h2>Autodidact | Programmer | Engineer</h2>
        </a>
        <nav>
            <ul>
                <li class="selected">Home</li>
                <li>About</li>
                <li>Gallery</li>
                <li>Resume</li>
                <li>Experiments</li>
                <li>Contact</li>
            </ul>
        </nav>
    </header>

<?php } 

    # function that displays the footer
    function footer() {
?>

     <footer>
        <a href="http://hanatsuki-kimiko.deviantart.com/">
            <img src="img/twitter-wrap2.png" alt="DeviantArt logo" 
            class="social-icon">
        </a>

        <a href="https://www.facebook.com/kimberly.bautista.3609">
            <img src="img/facebook-wrap.png" alt="Facebook logo" 
            class="social-icon">
        </a>

        <p>&copy; 2014 Kimberly Bautista.</p>
    </footer>

<?php } 

    # function that calls all the functions (for similar pages)
    function genericpage() { ?>

    <body id="main">
    <?= navigation() ?>
    <div id="wrapper">
        <div id="content"><!--insert content here--></div>
        <?= footer() ?>
    </div>
</body>
<?php } ?>