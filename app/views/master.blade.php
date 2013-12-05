<!DOCTYPE html>
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- Site Properities -->
	<title>Listing - Open Genghis</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="./">
	{{ HTML::style('css/semantic.css') }}
	{{ HTML::style('css/homepage.css') }}
	{{ HTML::script('http://code.jquery.com/jquery-latest.min.js') }}
	{{ HTML::script('javascript/semantic.js') }}
	{{ HTML::script('javascript/homepage.js') }}
</head>
<body id="home">
	<div class="ui inverted page grid masthead segment">
		<div class="column">
			<div class="ui hidden transition information">
				<h1 class="ui inverted header">
					Open Genghis
				</h1>
				<p>A Laravel/js/Semantic UI open source version of Genghis.</p>

			</div>
		</div>
	</div>
	<div class="ui page grid stackable segment">
		<div class="ten wide column">
			<h1>Current Exercises</h1>
			<h3>These are all the exercises in the database, click to edit!</h3>
		</div>
		<div class="sixteen wide column">
			@yield('content')
		</div>
	</div>
</div>

</div>
<div class="ui inverted teal page grid segment">
	<div class="ten wide column">
		
	</div>
	<div class="six wide right floated aligned column">
		<h3 class="ui header">About</h3>
		<addr>
			Juan Luis<br>
			Spain<br>
		</addr>
		<div class="ui inverted link list">
			<a href="http://juanlu.is/" class="item">http://juanlu.is/</a>
		</div>
	</div>
</div>
</body>

</html>