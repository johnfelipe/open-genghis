<!DOCTYPE html>
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- Site Properities -->
	<title>Listing - Open Genghis</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="./css/semantic.css">
	<link rel="stylesheet" type="text/css" href="./css/homepage.css">

	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
	<script src="./javascript/semantic.js"></script>
	<script src="./javascript/homepage.js"></script>

</head>
<body id="home">
	<div class="ui inverted page grid masthead segment">
		<div class="column">
			<div class="inverted secondary pointing ui menu">
				<div class="header item">Cat University</div>
				<div class="right menu">
					<div class="ui top right pointing mobile dropdown link item">
						Menu
						<i class="dropdown icon"></i>
						<div class="menu">
							<a class="item">Classes</a>
							<a class="item">Cocktail Hours</a>
							<a class="item">Community</a>
						</div>
					</div>
					<div class="ui dropdown link item">
						Courses
						<i class="dropdown icon"></i>
						<div class="menu">
							<a class="item">Petting</a>
							<a class="item">Feeding</a>
							<a class="item">Mind Reading</a>
						</div>
					</div>
					<a class="item">Library</a>
					<a class="item">Community</a>
				</div>
			</div>

			<div class="ui hidden transition information">
				<h1 class="ui inverted header">
					Open Genghis
				</h1>
				<p>A Laravel/js/Semantic UI open source version of Genghis.</p>
				<div class="large basic inverted animated fade ui button">
					<div class="visible content">Come to ICU 2013</div>
					<div class="hidden content">Register Now</div>
				</div>
			</div>
		</div>
	</div>
	<div class="ui page grid stackable segment">
		
		<div class="ten wide column">
			@yield('content')
		</div>
	</div>
</div>


<div class="ui page grid stackable segment">
	<div class="ten wide column">
		<p>testestseatataeswt</p>
	</div>
</div>
</div>
<div class="ui inverted teal page grid segment">
	<div class="ten wide column">
		<div class="ui three column stackable grid">
			<div class="column">
				<div class="ui header">Courses</div>
				<div class="ui inverted link list">
					<a class="item">Registration</a>
					<a class="item">Course Calendar</a>
					<a class="item">Professors</a>
				</div>
			</div>
			<div class="column">
				<div class="ui header">Library</div>
				<div class="ui inverted link list">
					<a class="item">A-Z</a>
					<a class="item">Most Popular</a>
					<a class="item">Recently Changed</a>
				</div>
			</div>
			<div class="column">
				<div class="ui header">Community</div>
				<div class="ui inverted link list">
					<a class="item">BBS</a>
					<a class="item">Careers</a>
					<a class="item">Privacy Policy</a>
				</div>
			</div>
		</div>
	</div>
	<div class="six wide right floated aligned column">
		<h3 class="ui header">Contact Us</h3>
		<addr>
			237 Catberry Road <br>
			Milton Keynes, London <br>
		</addr>
		<p>(404) 867-5309</p>
	</div>
</div>
</body>

</html>