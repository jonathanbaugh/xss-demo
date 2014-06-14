<html>
<head>
<style>
body {
	background-color: <?php echo isset($_GET['color']) ? $_GET['color'] : 'white' ?>;
}
</style>
</head>
<body>
	Tell me your favorite color and I'll change the background!<br />

	<form method="get">
		<select name="color">
			<option>Select one...</option>
			<option value="red">Red</option>
			<option value="blue">Blue</option>
		</select>

		<input type="submit" value="Go" />
	</form>
</body>
</html>
