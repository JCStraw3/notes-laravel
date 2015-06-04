<html>
	<head>
		<title>Notes</title>
	</head>
	<body>

		<!-- Login an existing user -->

		<h1>Login</h1>

		<form action='/auth/login' method='post'>
			<input name='email' type='email' placeholder='Email' />
			<input name='password' type='password' placeholder='Password' />
			<button>Login</button>
		</form>

		<!-- Display any errors -->

		<?php if($errors->any()): ?>

			<ul>
				<?php foreach ($errors->all() as $error): ?>
					<li><?php echo $error; ?></li>
				<?php endforeach; ?>
			</ul>

		<?php endif; ?>

	</body>
</html>