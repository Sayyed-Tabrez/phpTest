<!doctype html>
<html lang="en">
	<head>
		<title>Task One</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 mt-5">
				<form id="upload_data_form" enctype="multipart/form-data" method="post" role="form">
					<input type="file" name="file" accept=".xlsx" required>
					<button type="submit" class="btn btn-success btn-sm pull right">Upload</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</body>
	<script type="text/javascript">
		$(function() {
			$( "#upload_data_form" ).submit(function( event ) {
				event.preventDefault();
				swal("Information", "Please Wait, Processing", "info")
				$.ajax({
					url:"upload_data.php",
					method:"POST",
					data:new FormData(this),
					contentType:false,
					processData:false,
					success:function(result){
						if (result == 'success'){
							swal("Sucsess", "Request Process Sucsessfully", "success").then((value) => {
								location.reload();
							});
						}else{
							swal("Error","Error While Processing, Please Try Again","error")
						}
					}
				})
			});
		});
	</script>
</html>