<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="../img/favicon.png" sizes="16x16 32x32" type="image/png">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
	<link rel="stylesheet" href="./css/common.css" type="text/css">
	<link rel="stylesheet" href="./css/dashboard.css" type="text/css">
	<title>Cinema🇱🇰 - Dashboard</title>
</head>
<body>
	<header>
		<div class="logo">
			<div class="menu">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			<h1 class="title">Dashboard</h1>
		</div>
		<nav class="navigation">
			<ul>
				<li><a href="#" class="current"><i class="far fa-chart-bar"></i><span>STATISTICS</span></a></li>
				<li>
					<a href="#" class="accordion"><i class="fas fa-film"></i><span>MOVIE</span></a>
					<ul>
						<li><a href="#" onclick="load_section(event, './movie/save.php')"><i class="far fa-save"></i><span>ADD</span></a></li>
						<li><a href="#"><i class="fas fa-list-ul"></i><span>VIEW</span></a></li>
						<li><a href="#"><i class="far fa-edit"></i><span>UPDATE</span></a></li>
						<li><a href="#"><i class="far fa-trash-alt"></i><span>DELETE</span></a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="accordion"><i class="fas fa-users"></i><span>USERS</span></a>
					<ul>
						<li><a href="#"><i class="fas fa-user-plus"></i><span>ADD</span></a></li>
						<li><a href="#"><i class="fas fa-user-check"></i><span>VIEW</span></a></li>
						<li><a href="#"><i class="fas fa-user-edit"></i><span>UPDATE</span></a></li>
						<li><a href="#"><i class="fas fa-user-minus"></i><span>DELETE</span></a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="accordion"><i class="fas fa-tv"></i><span>TV-SERIES</span></a>
					<ul>
						<li><a href="#"><i class="far fa-save"></i><span>ADD</span></a></li>
						<li><a href="#"><i class="fas fa-list-ul"></i><span>VIEW</span></a></li>
						<li><a href="#"><i class="far fa-edit"></i><span>UPDATE</span></a></li>
						<li><a href="#"><i class="far fa-trash-alt"></i><span>DELETE</span></a></li>
					</ul>
				</li>
				<li>
					<a href="#" class="accordion"><i class="fas fa-asterisk"></i><span>UPCOMING</span></a>
					<ul>
						<li><a href="#"><i class="far fa-save"></i><span>ADD</span></a></li>
						<li><a href="#"><i class="fas fa-list-ul"></i><span>VIEW</span></a></li>
						<li><a href="#"><i class="far fa-edit"></i><span>UPDATE</span></a></li>
						<li><a href="#"><i class="far fa-trash-alt"></i><span>DELETE</span></a></li>
					</ul>
				</li>
				<li><a href="#"><i class="far fa-flag"></i><span>REQUESTS</span></a></li>
				<li><a href="#"><i class="fas fa-cog"></i><span>SETTINGS</span></a></li>
			</ul>
		</nav>
	</header>
	<main>
		<section id="view-section"></section>
		<aside></aside>
	</main>
	<footer>
		<p>© 2020 Cinema🇱🇰, All rights reserved</p>
	</footer>
<script src="./js/common.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
	function load_section(event, section) {
		event.preventDefault();
		$.ajax({
			url: section,
			method: 'post',
			success: function(data) {
				$("#view-section").html(data);
			}
		});
	}
</script>
</body>
</html>