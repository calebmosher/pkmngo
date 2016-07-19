<?
function include_section($sectionName, $isNav = false) {
	echo $isNav ? '' : '<section id="section-' . $sectionName . '">';
	include 'dist/sections/' . $sectionName . '.php';
	echo $isNav ? '' : '</section>';
}
$all_sections = array(
	'what-is-pokemon-go',
	'getting-started',
	'how-to-play-basics',
	'pokemon-gyms',
	'advanced-gameplay'
);
?>

<!DOCTYPE html>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Pokemon Go Tips</title>
<meta name="description" content="Pokemon Go Tips has tips, tricks, strategy, and helpful guides on how to go from a newbie Pokemon Trainer to the ultimate Pokemon Go Master." />

<meta name="keywords" content="pokemon go tips, pokemon go, pokego, pogo, tips, tricks, guide, strategy, pokemon go guide" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

<link rel="icon" href="/assets/pokeball-medium-dark.png" />
<link rel="stylesheet" href="dist/built/main.built.css" />

</head>

<body>
	<nav>
		<div class="nav-mobile">
			<div class="title">PkmnGo.Tips</div>
			<div class="menu"></div>
		</div>

		<? include_section('nav', true); ?>
	</nav>

	<main>
		<h1>
			Pokemon Go Tips <br />
			<span>The ultimate guide to playing and mastering Pokemon Go.</span>
		</h1>

		<article>
			<? include_section(array_shift($all_sections)) ?>

			<? include_section(array_shift($all_sections)) ?>

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- PkmnGo.Tips Inline 1 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:336px;height:280px"
			     data-ad-client="ca-pub-2868989717589457"
			     data-ad-slot="2765713430"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

			<? include_section(array_shift($all_sections)) ?>

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- PkmnGo.Tips Inline 2 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:336px;height:280px"
			     data-ad-client="ca-pub-2868989717589457"
			     data-ad-slot="5719179834"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

			<? include_section(array_shift($all_sections)) ?>

			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- PkmnGo.Tips Inline 3 -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:336px;height:280px"
			     data-ad-client="ca-pub-2868989717589457"
			     data-ad-slot="7195913037"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

			<? include_section(array_shift($all_sections)) ?>

		</article>

		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- PkmnGo.Tips Footer -->
		<ins class="adsbygoogle"
		     style="display:inline-block;width:320px;height:100px"
		     data-ad-client="ca-pub-2868989717589457"
		     data-ad-slot="8672646231"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>

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
