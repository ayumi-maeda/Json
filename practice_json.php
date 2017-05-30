<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<?php

	$jsondata = file_get_contents('sample.json');

	var_dump($jsondata);

	echo '<br>';

	$array = json_decode($jsondata,true);

	var_dump($array);

	echo '<br>';
	echo 'お名前:'.$array['name'];

	//genderを表示してみよう
	echo '<br>';
	echo '性別:'.$array['gender'];

	//趣味を複数個jsonファイルに追加して、リスト形式で表示して下さい<ul>タグ

?>

	<ul>
		<li><?php echo '趣味1;'.$array['hobby'][0];?></li>
		<li><?php echo '趣味2;'.$array['hobby'][1];?></li>
		<li><?php echo '趣味3;'.$array['hobby'][2];?></li>
	</ul>
</body>
</html>