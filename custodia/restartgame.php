<?php

$jsonUrl = "flags.json";

if(isset($_GET['password'])){
	if ($_GET['password'] == "42") {
		try{
			$original = [
				"redTeam" => [
					"flag1" => "0",
					"flag2" => "0",
					"flag3" => "0",
					"flag4" => "0",
					"flag5" => "0",
					"flag6" => "0",
					"flag7" => "0",
					"flag8" => "0",
					"flag9" => "0",
					"flag10" => "0",
					"flag11" => "0",
					"flag12" => "0",
					"flag13" => "0"
				],
				"blueTeam" => [
					"flag1" => "0",
					"flag2" => "0",
					"flag3" => "0",
					"flag4" => "0",
					"flag5" => "0",
					"flag6" => "0",
					"flag7" => "0",
					"flag8" => "0",
					"flag9" => "0",
					"flag10" => "0",
					"flag11" => "0",
					"flag12" => "0",
					"flag13" => "0"
				]
			];

			$jsondata = json_encode($original, JSON_PRETTY_PRINT);

			if(file_put_contents($jsonUrl, $jsondata)) {
			    echo 'Data successfully saved';
			}else{
			    echo "error";
			}
		}
		catch (Exception $e) {
			echo "There was a problem with the PHP JSON code";
			echo $e;
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>???</title>
</head>
<body>
	<form>
		<label>Password</label>
		<input type="text" name="password">
		<input type="submit" name="submit">
	</form>
	<p>Bonus Flag: fylacterium</p>
</body>
</html>