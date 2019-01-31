<!DOCTYPE html>
<html>
<?php
include 'header.php';
?>
<body>
	<?php
	include 'top-page.php'
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
			<li class="active"><a href="pengurus.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Data Pengurus</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Pengurus </h1>
			</div>
		</div><!--/.row-->

		<div class="row" style="margin-bottom: 20px">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<a href="#form4" class="btn btn-success" style="width: 100%;" data-toggle="collapse"><svg class="glyph stroked plus sign" style="width: 40px; height: 30px; padding-right: 10px"><use xlink:href="#stroked-plus-sign"/></use></svg> Tambah Pengurus</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default children collapse" id="form4">
					<div class="panel-body">
						<form role="form">
							<div class="col-md-6">
								<div class="form-group">
									<label>NIM</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Divisi</label>
									<select class="form-control">
										<option></option>
										<option>Badan Pengurus Harian</option>
										<option>Hubungan Masyarakat</option>
										<option>Kewirausahaan</option>
										<option>Media Komunikasi dan Informasi</option>
										<option>Pengembangan Sumber Daya Manusia</option>
										<option>Riset dan Teknologi</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Jabatan</label>
									<select class="form-control">
										<option></option>
										<option>Ketua</option>
										<option>Wakil Ketua</option>
										<option>Sekretaris 1</option>
										<option>Sekretaris 2</option>
										<option>Bendahara</option>
										<option>Koor</option>
										<option>Staff</option>
									</select>
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
					<div class="panel-body">
						<table data-toggle="table" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead> 
						    <tr>
						    	<th>No</th>
						        <th>Nama</th>
						        <th>Foto</th>
						        <th>Divisi</th>
						        <th>Jabatan</th>
						        <th>Tahun Jabatan</th>
						        <th>Opsi</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>	<!--/.main-->
	<?php
	include 'footer.php';
	?>
</body>

</html>
