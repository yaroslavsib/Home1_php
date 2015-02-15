<?php

function print_array($array){
	$i=1;
	foreach($array as $value){
		echo "$i. $value<br>";
		$i++;
	}
}