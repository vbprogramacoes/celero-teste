<!DOCTYPE html>
<html>
<head>
	<title>Teste Celero</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
	<script type="text/javascript">
		$.ajax({
		  url: 'https://randomuser.me/api/',
		  dataType: 'json',
		}).done(function(data){
			console.log(data);
			console.log(data.results[0].name.first);
		});
	</script>
</body>
</html>