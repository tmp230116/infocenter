<?php
	const DATABASE_HOST="localhost";
	const DATABASE_USER="root";
	const DATABASE_PASSWORD="";
	const DATABASE_NAME="infocenter_cities";
	const SEARCH_RESULT_COUNT=3;
	$result=null;
	$query=null;
	if(array_key_exists("type", $_GET)) {
		switch($_GET["type"]) {
			case "all":
				$query="SELECT city FROM cities";
				break;
			case "check":
				$query=
				"SELECT count(city) FROM cities WHERE city='".
				$_GET["value"]."'";
				break;
			case "search":
				$query=
				"SELECT city FROM cities WHERE city LIKE '".$_GET["value"].
				"%' LIMIT ".SEARCH_RESULT_COUNT;
				break;
		}
		if($query!=null) {
			$mysqli=mysqli_connect(
			DATABASE_HOST,
			DATABASE_USER,
			DATABASE_PASSWORD,
			DATABASE_NAME
			);
			$mysqliResult=mysqli_query($mysqli, $query);
			if($mysqliResult!=false) {
				foreach(mysqli_fetch_all($mysqliResult) as $resultString) {
					if(array_key_exists(0, $resultString)) {
						if(strlen($result)>0) {
							$result.="\n";
						}
						$result.=$resultString[0];
					}
					unset($resultString);
				}
			}
			unset($mysqli, $mysqliResult);
		}
	}
	echo $result;
	unset($result, $query);
?>