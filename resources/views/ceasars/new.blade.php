<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>New post</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<div class="ui  top fixed menu">
		<div class="item">
			<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
		</div>
		<div class="item">
			<h1 class="header">New post</h1>
		</div>
		<div class="item">
			<a href="" class="ui green button"><i class="add square icon"></i>Nouveau post</a>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>

	<div class="ui centered grid">
		<div class="ui centered six wide column">
			<form action="/newCrypt/edit" method="post" class="ui form">
				{{csrf_field()}}
				<div class="field">
					<label for="fruit">Text</label>
					<input type="text" name="text" placeholder="Texte">
				</div>
				<div class="field">
					<label for="stock">Decalage</label>
					<input type="text" name="decalage" placeholder="Decalage">
				</div>
				<button type="submit" class="ui green button">Valider</button>
			</form>
		</div>
	</div>
	
</body>
</html>