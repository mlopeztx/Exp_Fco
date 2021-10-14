<?php
error_reporting(E_ALL & ~E_NOTICE);
header('Content-Type: text/html; charset=utf-8');

$QID = getId();
$Homo21 = getHomo21();
$Homo22 = getHomo22();
$Homo23 = getHomo23();
$Homo24 = getHomo24();
$Homo25 = getHomo25();
$Homo26 = getHomo26();
$Homo27 = getHomo27();
$DigiCit_21 = getDigiCit_21();
$DigiCit_22 = getDigiCit_22();
$DigiCit_23 = getDigiCit_23();
$DigiCit_24 = getDigiCit_24();
$DigiCit_25 = getDigiCit_25();
$DigiCit_26 = getDigiCit_26();
$DigiCit_27 = getDigiCit_27();
$DigiCit_28 = getDigiCit_28();
$DigiCit_29 = getDigiCit_29();
$DigiCit_210 = getDigiCit_210();
$DigiCit_211 = getDigiCit_211();
$DigiCit_212 = getDigiCit_212();
$DigiCit_213 = getDigiCit_213();
$DigiCit_214 = getDigiCit_214();


// execute R script from shell

$command = "Rscript /var/www/html/Random-block-2.R $QID $Homo21 $Homo22 $Homo23 $Homo24 $Homo25 $Homo26 $Homo27 $DigiCit_21 $DigiCit_22 $DigiCit_23 $DigiCit_24 $DigiCit_25 $DigiCit_26 $DigiCit_27 $DigiCit_28 $DigiCit_29 $DigiCit_210 $DigiCit_211 $DigiCit_212 $DigiCit_213 $DigiCit_214";

$out = trim(shell_exec($command));
$data = explode(',', $out);

#echo($data);

echo "data3=" . $data[0] . "&";
echo "data4=" . $data[1];



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

function getHomo21(){
	if(isset($_GET['Homo21'])){
		$str = trim($_GET['Homo21']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo22(){
	if(isset($_GET['Homo22'])){
		$str = trim($_GET['Homo22']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo23(){
	if(isset($_GET['Homo23'])){
		$str = trim($_GET['Homo23']);
		if(is_numeric($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo24(){
	if(isset($_GET['Homo24'])){
		$str = trim($_GET['Homo24']);
		if(is_numeric($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo25(){
	if(isset($_GET['Homo25'])){
		$str = trim($_GET['Homo25']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getHomo26(){
	if(isset($_GET['Homo26'])){
		$str = trim($_GET['Homo26']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}
function getHomo27(){
	if(isset($_GET['Homo27'])){
		$str = trim($_GET['Homo27']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_21(){
	if(isset($_GET['DigiCit_21'])){
		$str = trim($_GET['DigiCit_21']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_22(){
	if(isset($_GET['DigiCit_22'])){
		$str = trim($_GET['DigiCit_22']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_23(){
	if(isset($_GET['DigiCit_23'])){
		$str = trim($_GET['DigiCit_23']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_24(){
	if(isset($_GET['DigiCit_24'])){
		$str = trim($_GET['DigiCit_24']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_25(){
	if(isset($_GET['DigiCit_25'])){
		$str = trim($_GET['DigiCit_25']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_26(){
	if(isset($_GET['DigiCit_26'])){
		$str = trim($_GET['DigiCit_26']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_27(){
	if(isset($_GET['DigiCit_27'])){
		$str = trim($_GET['DigiCit_27']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_28(){
	if(isset($_GET['DigiCit_28'])){
		$str = trim($_GET['DigiCit_28']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_29(){
	if(isset($_GET['DigiCit_29'])){
		$str = trim($_GET['DigiCit_29']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_210(){
	if(isset($_GET['DigiCit_210'])){
		$str = trim($_GET['DigiCit_210']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_211(){
	if(isset($_GET['DigiCit_211'])){
		$str = trim($_GET['DigiCit_211']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_212(){
	if(isset($_GET['DigiCit_212'])){
		$str = trim($_GET['DigiCit_212']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_213(){
	if(isset($_GET['DigiCit_213'])){
		$str = trim($_GET['DigiCit_213']);
		if(is_string($str)){
			return $str;
		}else{
			return null;
		}
	}else{
		return null;
	}
}

function getDigiCit_214(){
	if(isset($_GET['DigiCit_214'])){
		$str = trim($_GET['DigiCit_214']);
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
