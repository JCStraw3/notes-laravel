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

		<!-- Create a note -->

		<h1>Create a Note</h1>

		<form action='/notes' method='post'>
			<input name='title' placeholder='Title' />
			<input name='body' placeholder='Body' />
			<button>Create Note</button>
		</form>


		<!-- Display any errors -->

		<?php if($errors->any()): ?>

			<ul>
				<?php foreach ($errors->all() as $error): ?>
					<li><?php echo $error ?></li>
				<?php endforeach; ?>
			</ul>

		<?php endif; ?>

	</body>
</html>