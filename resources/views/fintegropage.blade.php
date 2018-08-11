<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<style>
    body {
    	margin: 0;
    	padding: 0;
    }
	.forma {
		margin: 0 10px;
		width: 400px;
		border-radius: 5px;
		border: 2px solid grey;
		background: #FFFF69;
		padding: 0 0 0 5px;
	}
	.inside_form {
		position: relative;
		margin: 0 28%;
	}
</style>

</head>
<body>
	<h1>Hello amigos!</h1>
	
	<div class="forma">
    
	 <form action="{{ route('dataform') }}" method="POST" class="inside_form">
	  {{ csrf_field() }}
	 	<p>Your Name:</p><p><input type="text" name="name" id="" placeholder="Ваше имя"></p>
	 	<p>Your Code:</p><p><input type="text" name="code" id="" placeholder="Ваш код"></p>
	 	<!-- <p>Your Mail:</p><p><input type="email" name="email" id="" placeholder="Ваша почта"></p>
	 	<p>Your Passw:</p><p><input type="password" name="password" id="" placeholder="Введите пароль"></p> -->
	 	<p><input type="submit" value="Submit"></p>
	 </form>
	</div>

	<div><a href="http://fintegroback/fintpage2">LINK</a></div>
</body>
</html>
