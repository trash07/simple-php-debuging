<?php 


function _debug(...$vars) {
	foreach ($vars as $var) {
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}
}


function _dump(...$vars) {
	foreach ($vars as $var) {
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
	}
}


function _stop($message = '') {
	exit($message);
}


function _condition($condition, $label) {
	echo "Condition <{$label}> is: ";
	if ($condition)
		echo "<true>";
	else 
		echo "<false>";
}


function _line($message = "Execution reached this line :" . __LINE__) {
	echo $message;
}
