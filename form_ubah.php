<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sewa DVD Termurah dan Terlengkap">
    <meta name="author" content="DVD Kuy!">
    <title>DVD Kuy! - Sewa DVD Termurah dan Terlengkap</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/navbar.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/chart.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	var url = $("#cartoonVideo").attr('src');
      	$("#myModal").on('hide.bs.modal', function(){
      		$("#cartoonVideo").attr('src', '');
      	});
      	$("#myModal").on('show.bs.modal', function(){
      		$("#cartoonVideo").attr('src', url);
      	});
      });
    </script>
    <style type="text/css">
      .modal-content video{
      margin: 0 auto;
      display: block;
      }
      .modal-content img{
      margin: 0 auto;
      display: block;
      }
      .modal-content video{
      margin: 0 auto;
      display: block;
      }
      .modal-content img{
      margin: 0 auto;
      display: block;
      }
    </style>
    <script type="text/javascript">
      $(document).ready(function(){
          /* Get iframe src attribute value i.e. YouTube video url
          and store it in a variable */
          var url = $("#cartoonVideo").attr('src');
          
          /* Assign empty url value to the iframe src attribute when
          modal hide, which stop the video playing */
          $("#myModal").on('hide.bs.modal', function(){
              $("#cartoonVideo").attr('src', '');
          });
          
          /* Assign the initially stored url back to the iframe src
          attribute when modal is displayed again */
          $("#myModal").on('show.bs.modal', function(){
              $("#cartoonVideo").attr('src', url);
          });
      });
    </script>
  </head>
  <body>
    <div class="container">
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">DVD Kuy!</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li class="active"><a href="dvd-list.php">List Film</a></li>
              <li><a href="chart.php">Chart</a></li>
              <li><a href="contact.php">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
     
	 <div class="jumbotron">
		<center>
		<h4>ubah data film</h4>
		</center>
      
  
<body>
	<h3>Ubah Data Film</h3>
	

	
	
      <?php
  if(isset($_GET['id'])){
  // Load file koneksi.php
  include "koneksi.php";
  
  // Ambil data ID SAPI yang dikirim oleh index.php melalui URL
  $id_flm = $_GET['id'];
  
  // Query untuk menampilkan data SAPI berdasarkan ID SAPI yang dikirim
  $query = "SELECT * FROM film WHERE ID_FILM='".$id_flm."'";
  $sql = $mysqli->query($query);  // Eksekusi/Jalankan query dari variabel $query
	while($row = $sql->fetch_array()){
        $id_flm = $row["ID_FILM"];
        $cover = $row["COVER"];
        $judul = $row["JUDUL_FILM"];
        $tahun = $row["TAHUN_FILM"];
        $harga = $row["HARGA_FILM"];
    }
  }
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id_flm; ?>">
	<table cellpadding="8">
	<tr>
		<td>JUDUL FILM</td>
		<td><input type="text" class="form-control is-valid" name="JUDUL_FILM" value="<?php echo $judul; ?>"></td>
	</tr>
	<tr>
		<td>TAHUN FILM</td>
		<td><input type="number" class="form-control is-valid"name="TAHUN_FILM" value="<?php echo $tahun; ?>"></td><br></td> 
	</tr>
	<tr>
		<td>HARGA FILM</td>
		<td><textarea class="form-control is-valid" name="HARGA_FILM"><?php echo $harga; ?></textarea></td>
	</tr>
	
	</table>
	
	<hr>
	<button type="submit" class="btn btn-success" name="submit">Submit</button>
	<a href="dvd-list.php"><input type="button" class="btn btn-danger" value="Batal"></a>
	</form>
</div>
     
    <center>Copyright &copy; 2018 SEWA DVD KUY!!!</center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
