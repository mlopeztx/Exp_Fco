<?php
error_reporting(E_ALL & ~E_NOTICE);
header('Content-Type: text/html; charset=utf-8');

$QID = getId();
$Homo1 = getHomo1();
$Homo2 = getHomo2();
$Homo3 = getHomo3();
$Homo4 = getHomo4();
$Homo5 = getHomo5();
$Homo6 = getHomo6();
$Homo7 = getHomo7();
$DigiCit_1 = getDigiCit_1();
$DigiCit_2 = getDigiCit_2();
$DigiCit_3 = getDigiCit_3();
$DigiCit_4 = getDigiCit_4();
$DigiCit_5 = getDigiCit_5();
$DigiCit_6 = getDigiCit_6();
$DigiCit_7 = getDigiCit_7();
$DigiCit_8 = getDigiCit_8();
$DigiCit_9 = getDigiCit_9();
$DigiCit_10 = getDigiCit_10();
$DigiCit_11 = getDigiCit_11();
$DigiCit_12 = getDigiCit_12();
$DigiCit_13 = getDigiCit_13();
$DigiCit_14 = getDigiCit_14();


// execute R script from shell

$command = "Rscript /var/www/html/Random-block-1.R $QID $Homo1 $Homo2 $Homo3 $Homo4 $Homo5 $Homo6 $Homo7 $DigiCit_1 $DigiCit_2 $DigiCit_3 $DigiCit_4 $DigiCit_5 $DigiCit_6 $DigiCit_7 $DigiCit_8 $DigiCit_9 $DigiCit_10 $DigiCit_11 $DigiCit_12 $DigiCit_13 $DigiCit_14";

$out = trim(shell_exec($command));
$data = explode(',', $out);

#echo($data);

echo "data0=" . $data[0] . "&";
echo "data1=" . $data[1];



#======================================================================================

function getId(){
	if(isset($_GET['QID'])){
		$str = trim($_GET['QID']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo1(){
	if(isset($_GET['Homo1'])){
		$str = trim($_GET['Homo1']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo2(){
	if(isset($_GET['Homo2'])){
		$str = trim($_GET['Homo2']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo3(){
	if(isset($_GET['Homo3'])){
		$str = trim($_GET['Homo3']);
		if(is_numeric($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo4(){
	if(isset($_GET['Homo4'])){
		$str = trim($_GET['Homo4']);
		if(is_numeric($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo5(){
	if(isset($_GET['Homo5'])){
		$str = trim($_GET['Homo5']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo6(){
	if(isset($_GET['Homo6'])){
		$str = trim($_GET['Homo6']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}
function getHomo7(){
	if(isset($_GET['Homo7'])){
		$str = trim($_GET['Homo7']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_1(){
	if(isset($_GET['DigiCit_1'])){
		$str = trim($_GET['DigiCit_1']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_2(){
	if(isset($_GET['DigiCit_2'])){
		$str = trim($_GET['DigiCit_2']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_3(){
	if(isset($_GET['DigiCit_3'])){
		$str = trim($_GET['DigiCit_3']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_4(){
	if(isset($_GET['DigiCit_4'])){
		$str = trim($_GET['DigiCit_4']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_5(){
	if(isset($_GET['DigiCit_5'])){
		$str = trim($_GET['DigiCit_5']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_6(){
	if(isset($_GET['DigiCit_6'])){
		$str = trim($_GET['DigiCit_6']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_7(){
	if(isset($_GET['DigiCit_7'])){
		$str = trim($_GET['DigiCit_7']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_8(){
	if(isset($_GET['DigiCit_8'])){
		$str = trim($_GET['DigiCit_8']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_9(){
	if(isset($_GET['DigiCit_9'])){
		$str = trim($_GET['DigiCit_9']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_10(){
	if(isset($_GET['DigiCit_10'])){
		$str = trim($_GET['DigiCit_10']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_11(){
	if(isset($_GET['DigiCit_11'])){
		$str = trim($_GET['DigiCit_11']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_12(){
	if(isset($_GET['DigiCit_12'])){
		$str = trim($_GET['DigiCit_12']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_13(){
	if(isset($_GET['DigiCit_13'])){
		$str = trim($_GET['DigiCit_13']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_14(){
	if(isset($_GET['DigiCit_14'])){
		$str = trim($_GET['DigiCit_14']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}


?>
