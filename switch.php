
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bayu</title>
    <style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');
body {
	font-family: 'Open Sans', sans-serif;
}
nav{
	position: relative;
	float: center;
	margin: 5px auto 0;
	width: 210px;
	height: 30px;
	background: #332FD0;
	border-radius: 8px;
	font-size: 0;
	box-shadow: 0 2px 3px 0 rgba(0,0,0,.1);
}
nav a{
	font-size: 15px;
	text-transform: uppercase;
	color: white;
	text-decoration: none;
	line-height: 30px;
	position: relative;
	z-index: 1;
	display: inline-block;
	text-align: center;
}
nav .animation{
	position: absolute;
	height: 100%;
	/* height: 5px; */
	top: 0;
	/* bottom: 0; */
	z-index: 0;
	background: #6FB2D2;
	border-radius: 8px;
	transition: all .5s ease 0s;
}
nav a:nth-child(1){
	width: 100px;
}
nav .start-home, a:nth-child(1):hover~.animation{
	width: 100px;
	left: 0;
}
nav a:nth-child(2){
	width: 110px;
}
nav a:nth-child(2):hover~.animation{
	width: 110px;
	left: 100px;
}

    </style>
  </head>
  <body>
    <nav>
      <a href="#">Daily</a>
      <a href="#">Monthly</a>
      <div class="animation start-home"></div>
    </nav>

  </body>
</html>
