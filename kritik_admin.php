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
			<li class="active"><a href="kritik.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Kritik &amp; Saran</a></li>
			<li><a href="pengurus.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Data Pengurus</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kritik &amp; Saran</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Penilaian Kinerja</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead> 
						    <tr>
						    	<th>No</th>
						    	<th>Pengirim</th>
						    	<th>Penerima</th>
						        <th>Kritik</th>
						        <th>Saran</th>
						        <th>Nilai</th>
						        <th>Status</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Nilai</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead> 
						    <tr>
						    	<th>No</th>
						    	<th>Nama</th>
						        <th>Nilai</th>
						        <th>Bulan</th>
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
