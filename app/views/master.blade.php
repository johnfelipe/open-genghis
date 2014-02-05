<!DOCTYPE html>
<html ng-app>
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<!-- Site Properities -->
	<title>Listing - Open Genghis</title>

	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>

	{{ HTML::style('css/semantic.css') }}
	{{ HTML::style('css/homepage.css') }}
	{{ HTML::script('http://code.jquery.com/jquery-latest.min.js') }}
	{{ HTML::script('javascript/semantic.js') }}
	{{ HTML::script('javascript/homepage.js') }}
	{{ HTML::script('javascript/tinymce/jscripts/tiny_mce/tiny_mce.js')}}
	{{ HTML::script('javascript/tinymce/jscripts/tiny_mce/plugins/asciimath/js/ASCIIMathMLwFallback.js')}}
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/angularjs/1.2.10/angular.min.js')}}
	<script type="text/javascript">
		var AMTcgiloc = "http://www.imathas.com/cgi-bin/mimetex.cgi";  		//change me
	</script>
	<?php
	include('tinymceinits.php');
	?>
</head>
<body id="home">
  <div>
    @yield('banner')
  </div>
	<div class="ui page grid stackable segment">
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
