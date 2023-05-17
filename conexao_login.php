<?php
	$host  ="localhost";
	$user ="root";
	$senha ="";
	$bancodedados="up_driver";
                
	$mysqli = new mysqli($host,$user,$senha,$bancodedados);
	if (empty($mysqli)) {
	    echo "erro";
	}
?>

