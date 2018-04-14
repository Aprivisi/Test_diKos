<?php
	$str = 'Fakultas.Ilmu.Komputer.UB';
	$arr_str = explode ('.',$str);
	echo '[';

 
	foreach ($arr_str as $value => $key){
	if($key==end($arr_str)){
	echo "'$key'";
	}else{
	echo "'$key', ";
	}
	}
	echo ']';
?>
