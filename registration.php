
<style>
.container
{
	width: 500px;
    height: 1000px;
	background-image: url("gif.gif");
	background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}


</style>
<html>
<head>
	<title>Înregistrare</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body style="background-color:white;">

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- Homepage Leaderboard -->
        <ins class="adsbygoogle"
            style="display:inline-block;width:728px;height:90px"
            data-ad-client="ca-pub-1234567890123456"
            data-ad-slot="1234567890"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
<div>
	<form action="registration.php" method="post">
		<div class="container">
			
			<div class="row">
				<div class="col-sm-3">
					<h1>Inregistrare</h1>
					<p><i>Completează căsuțele cu informațiile corespunzătoare.</i></p>
					<hr class="mb-3">
					<label for="name"><b>Nume și Prenume</b></label>
					<input class="form-control" id="name" type="text" name="name" required>

					<label for="telefon"><b>Telefon</b></label>
					<input class="form-control" id="telefon"  type="text" name="telefon" required>
					
					<label for="email"><b>Email</b></label>
					<input class="form-control" id="email"  type="email" name="email" required>

					<label for="parola"><b>Parolă</b></label>
					<input class="form-control" id="parola"  type="password" name="parola" required>
					<hr class="mb-3">
					<input class="btn btn-primary"style="background-color: gray;" type="submit" id="register" name="create" value="Sign Up">
				</div>
			</div>
		</div>
	</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function(){
		$('#register').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var name = $('#name').val();
			var telefon	= $('#telefon').val();
			var email = $('#email').val();
			var parola = $('#parola').val();
			var type = $('#type').val();

			
				e.preventDefault();	
				$.ajax({
					type: 'POST',
					url: 'process.php',
					data: {name: name, telefon: telefon, email: email, parola: parola, type: type},
					success: function(data){
					window.open("pagina.html");	
					Swal.fire({
								'title': 'Succes',
								'text': 'YEEEY',
								'type': 'succes'
								})
						
					},
					error: function(data){
						Swal.fire({
								'title': 'Errors',
								'text': 'Au aparut niste erori la salvarea datelor.',
								'type': 'error'
								})
					}
				});
				
			}else{
				
			}
			
		});		
		
	});
	
</script>
</body>
</html>