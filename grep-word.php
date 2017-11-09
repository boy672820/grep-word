<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Grep Word</title>
</head>

<body>

	<form action="/grep-word.php">
		<input type="text" name="s" value="" placeholder="Enter the word...">
		<button type="submit">Search</button>
	</form>

	<div>
	<?php
	if ( $_GET[ 's' ] ) {
		ob_start();
		system( 'grep -r "' . $_GET[ 's' ] . '" /home/user/www/ --color=always' );
		$result = ob_get_clean();

		$result = nl2br( $result );

		$result = str_replace( '[35m[K', '<span style="color: #bb00bb; ">', $result );
		$result = str_replace( '[m[K[36m[K', '</span>', $result );

		$result = str_replace( '[01;31m[K', '<b>', $result );
		$result = str_replace( '[m[K', '</b>', $result );

		echo $result;
	}
	?>
	</div>

</body>
</html>
