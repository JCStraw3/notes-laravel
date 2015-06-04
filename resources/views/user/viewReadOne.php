<html>
	<head>
		<title>Notes</title>
		<style>
		.note{
			background: #FFFF80;
			width: 500px;
			margin: 20px;
			padding: 1px;
			padding-left: 20px;
			}
		.header{
			background: #C0C0C0;
			color: white;
			width: 100%;
			padding: 10px;
		}
		a{
			color: #84FF09;
		}
		</style>
	</head>
	<body>

		<!-- Navigation bar -->

		<div class="header">
			<?php if(isset($user)): ?>

				<a href="/user/<?php echo $user->id ?>"><?php echo $user->name; ?></a>
				<a href="/user/<?php echo $user->id ?>/edit">Update Profile</a>
				<a href="/notes">Notes</a>
				<a href="/auth/logout">Sign Out</a>

			<?php endif; ?>
		</div>

		<!-- View user profile -->

		<h1><?php echo $user->name; ?></h1>

		<div class='user'>

			<p>Name: <?php echo $user->name; ?></p>
			<p>Email: <?php echo $user->email; ?></p>

		</div>

	</body>
</html>