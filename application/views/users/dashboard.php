<?php
	if ($this->session->userdata('loggedIn') ===false)
	{
		redirect('/users/index');
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<script src="/assets/js/jquery.min.js" type="text/javascript" charset="utf-8" async defer></script>
		<link rel="stylesheet" href="/assets/css/style.css">
		<title>Welcome</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="nav">
				<h1 class="nav">Welcome!</h1>
				<ul id="nav" class="nav-links">
					<li class="nav-links" id="1" class="visible"><a href="/">Home</a></li>
					<li class="nav-links" id="2" class="visible"><a href="/users/logout">Logout</a></li>
				</ul>
			</div>

			<div class="container">
				<div class="user_info">
					<!-- <?php // var_dump($user_data); ?> -->

					<h4 class="user_info">User Alias: <?=$this->session->userdata['alias'] ?> </h4>
					<h5 class="user_info"> Name: <?=$this->session->userdata['name'] ?></h5>
					<h4 class="user_info">Email: <?=$this->session->userdata['email'] ?> </h4>
				</div>

				</div>
			</div>