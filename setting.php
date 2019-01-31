<!DOCTYPE html>
<html>
<?php
include 'header.php';
?>
<body>
		<?php
		include 'top-page.php';
		?>
		<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<img src="img/1.jpg" style="width: 75px; height: 75px; margin-left: auto; margin-right: auto; display: block; ">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Data Rapat</a></li>
			<li><a href="proker.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Data Proker</a></li>
			<li><a href="kas.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Data Kas</a></li>
			<li><a href="kritik.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Kritik &amp; Saran</a></li>
			<li><a href="pengurus.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Data Pengurus</a></li>
		</ul>

		</div><!--/.sidebar-->
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Pengaturan</h1>
				</div>
			</div><!--/.row-->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Data Diri</div>
						<div class="panel-body">
							<form role="form">
								<div class="col-md-6">
									<div class="form-group">
										<label>NIM</label>
										<input type="text" class="form-control" readonly="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama</label>
										<input type="text" class="form-control" readonly="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Divisi</label>
										<input type="text" class="form-control" readonly="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Jabatan</label>
										<input type="text" class="form-control" readonly="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Foto Pengurus</label>
										<input type="file">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control">
									</div>
								</div>
						</div>
						<div class="panel-heading">Login Data</div>
						<div class="panel-body">
								<div class="col-md-6">
									<div class="form-group">
										<label>Pertanyaan Keamanan</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Jawaban Keamanan</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<input type="submit" class="btn btn-primary" name="input" value="Simpan" />
									<button type="reset" class="btn btn-default" name="reset">Reset</button>
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
					</div>
				</div><!-- /.col-->
			</div><!-- /.row -->
		</div><!-- /.main -->
		<?php
		include 'footer.php';
		?>
</body>
</html>