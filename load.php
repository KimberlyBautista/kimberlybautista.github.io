<?php
	# check: if there isn't a get request --> redirect to main page and stop running
	if (!isset($_GET["page"])) {
		header("Location: index.php");
		die();
	}

	$fileName = $_GET["page"]; # get the file name from loadcontent.js
	$validNames = array("main", "about", "gallery", "resume", "projects", "contact");

	# check if valid file name --> output html file
	for ($i = 0; $i < count($validNames); $i++) {
		if ($fileName == $validNames[$i]) {
			$fileContent = file_get_contents($fileName . ".html");
			print($fileContent);
		}
	}
?>