
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Thomas Ballatore</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width">

	<link rel="stylesheet" href="css/a1.css">

</head>
<body>

	<div class="container">

		<h1>Thomas Ballatore</h1>

		<img src='images/thomas_ballatore.jpg' alt='Thomas Ballatore'>

		<h2>About Me</h2>
		<p>
			Dr. Thomas Ballatore is co-founder and director of the Lake Basin Action
			Network, a global, nonprofit organization of environmental professionals
			dedicated to empowering people in developing countries in the use of
			geospatial technologies for lake conservation. Previously, he was a
			tenured associate professor at the Japan University of Economics and the
			lead researcher at the International Lake Environment Committee. Thomas
			has over 20 years experience working in Asia and Africa and has served as
			a consultant for organizations such as IUCN, JICA, UNEP, USAID, and the
			World Bank.	He holds a Ph.D. in Urban Engineering from the University of
			Tokyo as well as a B.A. in Political Science,	a B.S. in Civil Engineering
			and a M.S. in Environmental Engineering from the University of Illinois
			at Urbana-Champaign. His honors include being awarded the Japanese
			Monbusho Fellowship and the US Department	of Defense Engineering Alliance
			for Global Education Fellowship. He is also active in education in his
			local	community and has served two terms as the first American PTA
			President of a Japanese public school.
		</p>

		<h2>Random Presidential Quote</h2>

		<div class="quote">

		<?php

			$quotes = Array('The price of freedom is eternal vigilance.
			<br><br>-Thomas Jefferson',
			'The truth is that all men having power ought to be mistrusted.
			<br><br>-James Madison',
			'Do I not destroy my enemies when I make them my friends?
			<br><br>-Abraham Lincoln',
			'America was not built on fear. America was built on courage.
			<br><br>-Harry Truman',
			'If we have no sense of community, the American dream will wither.
			<br><br>-William Jefferson Clinton',
			'My fingers are long and beautiful, as, it has been well documented, are
			various other parts of my body.
			<br><br>-Donald Trump',
			'When you are a star they let you do anything.
			<br><br>-Donald Trump',
			'Nobody builds walls better than me, believe me!
			<br><br>-Donald Trump');

			echo $quotes[array_rand($quotes)];

		?>

		</div>

	</div>

</body>
</html>
