<!DOCTYPE html>
<html>
<?php
include 'header.php';
?>
<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading"><img src="img/Logo.png" style="width: 75px; height: 75px; margin-left: auto; margin-right: auto; display: block; ">Masuk</div>
				<div class="panel-body">
					<form role="form">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="ID Pengurus" name="id" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<a href="index.php" class="btn btn-primary">Masuk</a>
								<a href="lupa.php" style="text-align: right;">Lupa Password?</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	<?php
	include 'footer.php';
	?>
</body>

</html>
