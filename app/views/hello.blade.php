<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kevin Lee</title>

	<!-- <link rel="stylesheet" href="css/animation.css"> -->
	{{HTML::script('http://code.jquery.com/jquery-1.10.1.min.js')}}
	{{HTML::style('css/animations.css')}}
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 10px ;
		}	
		h3{
			font-size: 20px;
			margin-left: 100px;
		}
		img{
			width:100px;
			height: auto;
		}
	</style>
</head>
<body>
	<div class="welcome">
		<div class="pulse">{{HTML::image('img/ChickenNuggets.png')}}</div>
		<h1>Chicken Nuggets</h1>
		<h3>-Kevin Lee</h3>
	</div>
	<code> When life gives you chicken nuggets, eat it.</code>
</body>
</html>
