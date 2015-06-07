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

				<a href="/user/<?php echo htmlspecialchars($user->id); ?>"><?php echo htmlspecialchars($user->name); ?></a>
				<a href="/notes">Notes</a>
				<a href="/auth/logout">Sign Out</a>

			<?php endif; ?>
		</div>

		<!-- Update a user -->

		<h1>Edit User Profile</h1>

		<form action='/user/<?php echo htmlspecialchars($user->id); ?>' method='post'>
			<input name='_method' value='patch' type='hidden' />
			<input name='name' value='<?php echo htmlspecialchars($user->name); ?>' placeholder='Name' />
			<input name='email' value='<?php echo htmlspecialchars($user->email); ?>' placeholder='Email' />
			<button>Update User Profile</button>
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