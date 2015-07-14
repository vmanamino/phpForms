<?php

extract($_POST, EXTR_PREFIX_SAME, "post");
	/* assigns message by month */
	function my_fortune($month) {
	if ($month == "jan") {
		$message = "January, you're two faced, doubling as librarian by day, and genius programmer by night.  You will become a PHP ninja tomorrow!";	
	} else if ($month == "feb") {
		$message = "February, You're pure and clean as mid-winter air, you will become an angel tomorrow!";
	} else if ($month == "march") {
		$message = "March, You're war personified, go forth and fight!";
	} else if ($month == "april") {
		$message = "April, Like an apiary, you're sweet and delectable, become a pastry chef!";
	} else if ($month == "may") {
		$message = "May, You like to help others give birth, become a midwife!";
	} else if ($month == "june") {
		$message = "June, You harbor grudges, and become bitter, take your revenge tomorrow!";
	} else if ($month == "july") {
		$message = "July, You are tragic, prepare for death by a thousand stabs!";
	} else if ($month == "aug") {
		$message = "August, You are an emperor, extend your rule for a thousand years!";
	} else if ($month == "sept") {
		$message = "September, You are lucky, three times in a row";
	} else if ($month == "oct") {
		$message = "October, You are easily divided, prepare to be conflicted";
	} else if ($month == "nov") {
		$message = "November, You contain three threes, be prepared for anything!";
	} else if ($month == "dec") {
		$message = "December, YOu are resilient, you take the odd with the even";
	}
	return $message;
	}
	$fortune = my_fortune($month);
	
/* grap and show input */
echo "<h3>Thank you!</h3>";
echo "Here is a copy of your request:<br/><br/>";
echo "Name: ".$name."<br/>";
echo "Email: ".$email1."<br/>";
echo $fortune."<br/>";
echo "You got this bit for free.  In your next life you will be a ".$bird."<br/>";

/* get loopy with nesting and dynamically grab values from structured variable forms */
for ($i = 1; $i < 3; $i++) {
	$my_update = "update".$i;
	$form_email = "email".$i;
	if ($i == 1 && $$my_update == "on") {
		echo "update me at ".$$form_email."<br/>";		
	} else if ($i == 2 && $$my_update == "on") {
		echo "update my actuary at ".$$form_email;
	}
}


?>