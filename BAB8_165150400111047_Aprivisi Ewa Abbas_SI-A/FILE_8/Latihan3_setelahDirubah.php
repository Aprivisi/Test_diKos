<?php
  $numberedString = "1234567890123456789012345678901234567890";

  $fivePos = strpos($numberedString, "5");
  echo "The position of 5 in our string was $fivePos";

  $fivePos2 = strpos($numberedString, "5", $fivePos + 1);
  echo "<br>The position of the second 5 was $fivePos2";

 echo "<br>";

 echo "sesudah di edit ";
 echo "<br>";
 $arr1 = str_split($numberedString);
 for ($i=0; $i < count($arr1)-1 ; $i++) { 
	if ($arr1[$i] == '5') {
		echo "The position of 5 in our string was $i";
		break;
	}
}

