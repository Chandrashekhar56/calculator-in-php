<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="get" action="calculator.php">
			Enter number
			<input type="text" name="x" />
			<br>
			<br>
			Enter number
			<input type="text" name="y" />
			<br>
			<br>
			<select name="z" />
				<option value="+">+</option>
				<option value="-">-</option>
				<option value="*">*</option>
				<option value="/">/</option>
				<option value="%">%</option>
			</select>
			<br>
			<br>
			<input type="submit" name="submit" />
			<input type="reset" name="reset" />
		</form>
</body>
</html>
<?php
		if(isset($_GET['submit']))
		{
			$a=$_GET['x'];
			$b=$_GET['y'];
			$c=$_GET['z'];

			switch ($c) {
					case '+':
						echo $a+$b;
						break;
				
					case '-':
						echo $a-$b;
						break;

					case '*':
						echo $a*$b;
						break;

					case '/':
						echo $a/$b;
						break;

					case '%':
						echo $a%$b;
						break;
			}
		}
?>