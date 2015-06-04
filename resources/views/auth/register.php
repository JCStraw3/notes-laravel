<html>
	<head>
		<title>Notes</title>
	</head>
	<body>

		<!-- Create a new user -->

		<h1>Register an account</h1>

		<form action='/auth/register' method='post'>
			<input name='name' type='text' placeholder='Name' />
			<input name='email' type='email' placeholder='Email' />
			<input name='password' type='password' placeholder='Password' />
			<input name='password_confirmation' type='password' placeholder='Confirm Password' />
			<button>Register</button>
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