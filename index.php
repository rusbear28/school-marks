<!DOCTYPE html>
<html>
<head>
	<title>Расчет успеваемости и качества обученности</title>
</head>
<style>
	label {margin-right:0.5em; width:10em; float:left; text-align:left; display:block;}
	input[type=text] {width:50px; text-align:center; display:block; margin-bottom:10px;}
</style>
<body>
	<form action="results.php" method="post">
		<label>Количество "5"</label>
		<input type="text" name="marks[5]" value="0" />

		<label>Количество "4"</label>
		<input type="text" name="marks[4]" value="0" />

		<label>Количество "3"</label>
		<input type="text" name="marks[3]" value="0" />

		<label>Количество "2"</label>
		<input type="text" name="marks[2]" value="0" />

		<input type="submit" value="Рассчитать"/>
	</form>
</body>
</html>  