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
				<a href="/notes/create">Create Note</a>
				<a href="/auth/logout">Sign Out</a>

			<?php endif; ?>
		</div>

		<!-- View all notes -->

		<h1>Notes</h1>

		<?php foreach ($notes as $note): ?>

			<article class='note'>
				<h2>
					<a href="/notes/<?php echo htmlspecialchars($note->id); ?>"><?php echo htmlspecialchars($note->title); ?></a>
				</h2>

				<p><?php echo htmlspecialchars($note->body); ?></p>
				<p><a href="/notes/<?php echo htmlspecialchars($note->id); ?>/edit">Update Note</a></p>
				<form action='/notes/<?php echo htmlspecialchars($note->id); ?>' method='post'>
					<input name='_method' value='delete' type='hidden' />
					<button>Delete Note</button>
				</form>
			</article>

		<?php endforeach; ?>

	</body>
</html>