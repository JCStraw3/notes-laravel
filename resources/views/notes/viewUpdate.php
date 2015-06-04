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

		<!-- Update a note -->

		<h1>Edit a Note</h1>

		<form action='/notes/<?php echo $note->id; ?>' method='post'>
			<input name='_method' value='patch' type='hidden' />
			<input name='title' value='<?php echo $note->title; ?>' placeholder='Title' />
			<input name='body' value='<?php echo $note->body; ?>' placeholder='Body' />
			<button>Update Note</button>
		</form>

		<form action='/notes/<?php echo $note->id; ?>' method='post'>
			<input name='_method' value='delete' type='hidden' />
			<button>Delete Note</button>
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