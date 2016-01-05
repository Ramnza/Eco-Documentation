<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="theme-color" content="#009688">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<title><?php echo $vista['titulo']; ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="./public/stylesheets/bootstrap-material-design.min.css">
	<link rel="stylesheet" type="text/css" href="./public/stylesheets/ripples.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./public/stylesheets/uxBase.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,400italic,300italic,500italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

	<header>
		<div class="container">
			<h1 class="title">Eco - A PHP Framework</h1>
			<h2><i class="material-icons top6">code</i> by <a href="https://github.com/Ramnza">@Ramnza</a></h2>
		</div>
	</header>

	<main class="container">
		<div class="botonera visible-lg visible-md visible-sm hidden-xs">
			<a href="https://github.com/Ramnza/Eco" target="_blank" class="btn btn-raised btn-default">View On GitHub</a>
			<a href="https://github.com/Ramnza/Eco/zipball/master" class="btn btn-raised btn-default">Download Zip File</a>
			<a href="https://github.com/Ramnza/Eco/tarball/master" class="btn btn-raised btn-default">Download TAR Ball</a>
		</div>
		<div class="alert alert-dismissible alert-primary">
		  <strong>Heads up!</strong> This project is currently on an early development phase so the code could not be in a stable version at the moment.
		</div>
		<div class="mobileBotonera hidden-lg hidden-md hidden-sm visible-xs">
			<a href="https://github.com/Ramnza/Eco" target="_blank" class="btn btn-raised btn-default">View On GitHub</a>
			<a href="https://github.com/Ramnza/Eco/zipball/master" class="btn btn-raised btn-default">Download Zip File</a>
			<a href="https://github.com/Ramnza/Eco/tarball/master" class="btn btn-raised btn-default">Download TAR Ball</a>
		</div>
		<article>
			<h2>Introduction</h1>
			<p>
				Eco is a light, ready to use, PHP Framework. It has the core things you'll need to start developing your Server Side Web App.
				<br>
				With a low need of configuration is close to a just upload and develop framework.
			</p>
		</article>
		<article>
			<h2>Requirements</h2>
			<p>
				What are the requirements of Eco? The requirements of this PHP Framework are really simple:
				<ul>
					<li>PHP Version: 5.3+.</li>
					<li>Apache's Mod_Rewrite module activated.</li>
				</ul>
			</p>
		</article>
		<article>
			<h2>Configuration</h2>
			<p>
				Eco is configure-friendly so there's just a few things you need to change to get ready and put your hands on developing your app.
			</p>
			<h3>Configuring App Routes</h3>
			<p>
				To start configuring your own App Routes you just need to access the following library: <code>lib.Router.php</code> and in the Method called <code>AppRoutes()</code> you'll find the following <code>Array</code>:
			</p>
<pre>
$this->ColeccionRutas = [
    'index' => [ 'argumentos' => [ 'titulo' => 'EcoFramework DashBoard' ] ],
];
</pre>
			<p>
				Let's say you want to create a route for a view that will be used for your users profile. We can handle it this way:
			</p>
<pre>
$this->ColeccionRutas = [
    'index' => [ 'argumentos' => [ 'titulo' => 'EcoFramework DashBoard' ] ],
    'user' => [ 'argumentos' => [ 'titulo' => 'User Profile' ] ]
];
</pre>
			<p>
				And that's all folks, your route is now ready to be used but there's a last thing to prepare because the route is defined but... Which view will it take? At this moment: none. We need to head to <code>Views</code> folder and create a View called <code>view.user.php</code> and fill it with your <code>HTML</code> and <code>PHP</code>.
			</p>
		</article>
	</main>

	<!-- Jquery 1.11.3 -->
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="./public/javascripts/material.min.js"></script>
	<script src="./public/javascripts/ripples.min.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>