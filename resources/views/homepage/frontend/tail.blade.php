<!DOCTYPE HTML>

<html>
	<head>
		<!-- <title>USER</title> -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<?php //include 'clock.php' ?>

	</head>

<style>
.card {
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
<body>

<!-- Main -->
<section id="four" class="wrapper style2 special">
    <div class="inner">
      <header class="major narrow">
        <h2>Get in touch</h2>
        <p>If you want to say something about us</p>
      </header>
      <form action="" method="POST">
        <div class="container 75%">
          <div class="row uniform 50%">
            <div class="12u$">
              <textarea name="message" placeholder="Message" rows="4"></textarea>
            </div>
          </div>
        </div>
        <ul class="actions">
          <li><input type="submit" class="special" value="Submit" /></li>
          <li><input type="reset" class="alt" value="Reset" /></li>
        </ul>
      </form>
    </div>
  </section>


@include('homepage.footer')
