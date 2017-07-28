<?php
function random_pic($dir = 'icons')
{
	$files = glob($dir . '/*.*');
	$file = array_rand($files);
	return $files[$file];
}
echo random_pic();
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<title>Random game icon</title>
		<style type="text/css">
			body { background-color: #222; overflow: hidden; }
			* { font-family: 'Montserrat', Arial, Helvetica, sans-serif; }
			div.content-wrapper { position: absolute; width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; }
			div.icon { width: 500px; height: 500px; border-radius: .5em; background-color:#DDD; display: flex; align-items: center; justify-content: center; flex-direction: column; }
			img { width: 200px; height: 200px; }
			a { margin-top: 2em; color: #2388CB; text-decoration: none; font-weight: bold; }
			a:hover { color: #56BBED; }
		</style>
	</head>
	<body>
		<div class="content-wrapper">
			<div class="icon">
				<img id="icon" src="<?php echo random_pic(); ?>" />
				<a href="javascript:location.reload();">Générer une nouvelle icône</a>
			</div>
		</div>
	</body>
</html>