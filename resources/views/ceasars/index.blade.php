<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Encrypt Ceasar</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.6/semantic.min.css">
</head>
<body>

	<div class="ui  top fixed menu">
		<div class="item">
			<img src="https://www.raspberrypi.org/wp-content/uploads/2011/10/Raspi-PGB001.png">
		</div>
		<div class="item">
			<h1 class="header">Crypt</h1>
		</div>
		<div class="item">
			<a href="/newCrypt" class="ui green button"><i class="add square icon"></i>Nouveau message crypter</a>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>


	<div class="ui centered grid">
		<div class="ui centered eleven wide column">
			@foreach($ceasar as $ceasarCrypt)

			<div class="ui segment">

				<span>{{$ceasarCrypt->text}}</span>

			</div>
			@endforeach
		</div>
	</div>

</body>
</html>