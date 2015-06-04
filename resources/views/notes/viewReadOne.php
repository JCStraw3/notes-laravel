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
				<a href="/notes">Notes</a>
				<a href="/notes/create">Create Note</a>
				<a href="/auth/logout">Sign Out</a>

			<?php endif; ?>
		</div>

		<!-- View one note -->

		<h1><?php echo $note->title; ?></h1>

		<article>
			<p><?php echo $note->body; ?></p>
		</article>

		<p><a href="/notes/<?php echo $note->id; ?>/edit">Update Note</a></p>

		<form action='/notes/<?php echo $note->id; ?>' method='post'>
			<input name='_method' value='delete' type='hidden' />
			<button>Delete Note</button>
		</form>

	</body>
</html>