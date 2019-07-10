<!DOCTYPE html>
<html>
<head>
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

	<title>random</title>
</head>
<body>



<script>
var data;
	$.getJSON('http://localhost/bank-teller-api/api/',function(data){
		document.write(data.name);
			});



		</script>
</body>
</html>
	
