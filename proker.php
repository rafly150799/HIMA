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
			<li class="active"><a href="proker.php"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Data Proker</a></li>
			<li><a href="kas.php"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Data Kas</a></li>
			<li><a href="kritik.php"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Kritik &amp; Saran</a></li>
			<li><a href="pengurus.php"><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg> Data Pengurus</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Data Proker</h1>
			</div>
		</div><!--/.row-->

		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-blue panel-widget" href="#table1" data-toggle="collapse">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">13</div>
							<div class="text-muted">Jumlah Proker</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6">
				<div class="panel panel-orange panel-widget" href="#table2" data-toggle="collapse">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">1</div>
							<div class="text-muted">Jumlah Kehadiran</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-12">
				<div class="panel panel-default children collapse" id="table2">
					<div class="panel-body easypiechart-panel">
						<h4>Kehadiran Proker</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="10" ><span class="percent">10%</span>
						</div>
						<div class="panel-body">
						<table data-toggle="table" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>Nama Proker</th>
						        <th data-sortable="true">Tanggal Proker</th>
						        <th>Status</th>
						        <th>Alasan</th>
						    </tr>
						    </thead>
						</table>
					</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default children collapse" id="table1">
					<div class="panel-heading">Proker Telah Dilaksanakan</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>Nama Proker</th>
						        <th data-sortable="true">Tanggal Proker</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->

		<div class="row" style="margin-bottom: 20px">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<a href="#form2" class="btn btn-success" style="width: 100%;" data-toggle="collapse"><svg class="glyph stroked plus sign" style="width: 40px; height: 30px; padding-right: 10px"><use xlink:href="#stroked-plus-sign"/></use></svg> Tambah Proker</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default children collapse" id="form2">
					<div class="panel-body">
						<form role="form">
							<div class="col-md-6">
								<div class="form-group">
									<label>Nama Proker</label>
									<input class="form-control" name="proker" autofocus required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Tanggal</label>
									<input type="text" class="form-control" name="tgl_proker" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Catatan</label>
									<textarea class="form-control" rows="3" name="cat_proker"></textarea>
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

		<div class="row" style="margin-bottom: 20px">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<a href="#form1" class="btn btn-success" style="width: 100%;" data-toggle="collapse"><svg class="glyph stroked checkmark" style="width: 40px; height: 30px; padding-right: 10px"><use xlink:href="#stroked-checkmark"/></use></svg> Presensi Proker</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default children collapse" id="form1">
					<div class="panel-body">
						<form role="form">
							<div class="col-md-12">
								<div class="form-group">
									<label>Nama Proker</label>
									<select class="form-control" required>
										<option>Option 1</option>
										<option>Option 2</option>
										<option>Option 3</option>
										<option>Option 4</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<table data-toggle="table" data-pagination="true" data-sort-name="name" data-sort-order="desc">
								    <thead>
								    <tr>
								    	<th>No</th>
								        <th>Nama</th>
								        <th>Hadir</th>
								        <th>catatan</th>
								    </tr>
								    </thead>
								    <tr>
								    	<td></td>
								        <td></td>
								        <td><input type="checkbox" value=""></td>
								        <td></td>
								    </tr>
								</table>
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
					<div class="panel-heading">Proker Akan Datang</div>
					<div class="panel-body">
						<table data-toggle="table" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						    	<th>No</th>
						        <th>Nama Proker</th>
						        <th data-sortable="true">Tanggal Proker</th>
						    </tr>
						    </thead>
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	
	</div>	<!--/.main-->
	<?php
	include 'footer.php';
	?>
</body>

</html>
