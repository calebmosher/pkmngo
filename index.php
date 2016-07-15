<?
function include_section($sectionName, $isNav = false) {
	echo $isNav ? '' : '<section id="' . $sectionName . '">';
	include 'dist/sections/' . $sectionName . '.php';
	echo $isNav ? '' : '</section>';
}
?>

<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Pokemon Go Tips</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<link rel="icon" href="/assets/pokeball-medium-dark.png" />
<link rel="stylesheet" href="dist/built/main.built.css" />

</head>

<body>
	<nav>
		<? include_section('nav', true); ?>
	</nav>

	<main>
		<h1>
			Pokemon Go Tips <br />
			<span>The ultimate guide to playing and mastering Pokemon Go.</span>
		</h1>

		<?
			$all_sections = array(
				'what-is',
				'getting-started'
			);
			foreach ($all_sections as $section) {
				include_section($section);
			}
		?>

		<footer>&copy; 2016 <a href="http://pkmngo.tips">PkmnGo.Tips</a></footer>
	</main>

	<script src="dist/built/main.built.js"></script>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-80663844-1', 'auto');
	ga('send', 'pageview');
	</script>
</body>

</html>
