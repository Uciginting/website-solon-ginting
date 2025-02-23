<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ginting salon</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/css/styles3.css" rel="stylesheet">
		<style>
      body {
        padding-top: 60px; 
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="scrollspy">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle Nav</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">ginting salon</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li>
			    <a href="index.html"><span class="glyphicon glyphicon-home"></span> HOME <span class="sr-only">(current)</span></a>
			</li>
            <li>
				<a href="about.html"><span class="glyphicon glyphicon-user"></span> ABOUT</a>
			</li>
            <li>
				<a href="contact.html"><span class="glyphicon glyphicon-phone-alt"></span> CONTACT </a>
			</li>
            <li>
              <a href="produk.html"><span class="glyphicon glyphicon-shopping-cart"></span> PRODUK</a>
			</li>
          </ul>
        </div>
      </div>
      </nav>
      <br>
      <!-- Awal Page -->
		<div class="container">
      <!-- Awal baris -->
      <div class="row">
      <div class="col-md-8"><!-- Awal Kolom Pertama -->
      <div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Contact</h2>
						<table class="table table-hover">
							<div class="form-group">
							<label for="nama">Nama</label>
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
							</div>
					
							<div class="form-group">
							<label for="email">Alamat Email</label>
								<input type="email" name="email" class="form-control input-md" placeholder="Isikan alamat email yang masih aktif" required>
							</div>
							
							<div class="form-group">
							<label for="pesan">Pesan</label>
								<textarea name="pesan" class="form-control input-md" required> </textarea>
							</div>
							<a class="btn btn-info btn-lg" href="contact.html" role="button">Konfirmasi</a>
					    <a class="btn btn-warning btn-lg" href="contact.html" role="button">Cancel</a>
							
						</table>
					</form>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
			
			<div class="col-md-4"><!-- Awal kolom kedua -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2> ginting salon</h2>
				<img src="foto/c1.jpeg" class="img-thumbnail img-responsive">
				<center><p><b>Saran Dan Kritik Anda Sangat Berguna Bagi Kami</b></p><center>
				</div>
      </div>
			</div><!-- Akhir Kolom Kedua -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
      <br>
      <br>
      <br>
    	<div class="container">
		<div class="row">
		  <div class="col-md-4">
			<b class="leade"><span class="glyphicon glyphicon-map-marker"></span> Jl. Sisingamangaraja  No.13 </b>
		  </div>
		  <div class="col-md-4">
			<b class="leade"><span class="glyphicon glyphicon-map-marker"></span> Jl. Kapten Muslim No.20 </b>
		  </div>
		  <div class="col-md-4">
			<b class="leade"><span class="glyphicon glyphicon-map-marker"></span> Jl. Jamin Ginting No.45</b>
		  </div>
        </div>
	</div>
	<br>
	<br>
	<div class="container">
        <div class="row">
          <div class="col-md-12">
            <center>Copyright <span class="glyphicon glyphicon-copyright-mark"></span>ginting salon</center>
			<br>
        	</div>
        </div>
	</div>
	</div>
<script src="bootstrap/js/jQuery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</HTML>