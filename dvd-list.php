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
        <!-- MODAL -->
        <div id='modal_tambah_film' class='modal fade'>
          <div class='modal-dialog'>
            <div class='modal-content'>
              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                <h4 class='modal-title'>Tambah Film</h4>
              </div>
              <div class='modal-body'>
                <form method="POST">
                  ID Film : <input type="text" name="idfilm" class="form-control"><br>
                  Genre : 
                  <select name="genrefilm" class="form-control">
                    <option value="J001" selected>Animasi</option>
                    <option value="J002">Horror</option>
                    <option value="J003">Action</option>
                    <option value="J004">Comedy</option>
                    <option value="J005">Romantic</option>
                  </select>
                  <br>
                  Kategori : 
                  <select name="kategorifilm" class="form-control">
                    <option value="K001" selected>Movie</option>
                    <option value="K002">Game</option>
                    <option value="K003">Softwate</option>
                    <option value="K004">Series</option>
                  </select>
                  <br>
                  Cover url : <input type="text" name="cover" class="form-control"><br>
                  Judul film : <input type="text" name="judul" class="form-control"><br>
                  Tahun : <input type="number" name="tahun" class="form-control"><br>
                  Harga : <input type="number" name="harga" class="form-control"><br>
                  <button type="submit" name="submit" class="btn btn-info">Simpan</button>
                </form>
                <?php
                  include 'koneksi.php';
                  if(isset($_POST['submit'])){
                  	$input_idfilm = $_POST['idfilm'];
                  	$input_genre = $_POST['genrefilm'];
                  	$input_kategori = $_POST['kategorifilm'];
                  	$input_cover = $_POST['cover'];
                  	$input_judul = $_POST['judul'];
                  	$input_tahun = $_POST['tahun'];
                  	$input_harga = $_POST['harga'];
                  	$add = $mysqli->query("INSERT INTO `film` (`ID_FILM`, `ID_JENIS`, `ID_KATEGORI`, `COVER`, `JUDUL_FILM`, `TAHUN_FILM`, `HARGA_FILM`, `STATUS_FILM`, `JUMLAH_KALI_DIPINJAM`) VALUES ('".$input_idfilm."', '".$input_genre."', '".$input_kategori."', '".$input_cover."', '".$input_judul."', '".$input_tahun."', '".$input_harga."', '1', '0');");
                  	if($add){
                  		echo "<br><div class='alert alert-success'>Berhasil menambah list film</div>";
                  	} else {
                  		echo "<br><div class='alert alert-warning'>Gagal menambah list film</div>";
                  	}
                  }
                  ?>
              </div>
            </div>
          </div>
        </div>
        <a href="#modal_tambah_film" data-toggle="modal"><button type="button" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Film</button></a>
        <table class="table table-hover table-striped">
          <thead>
            <th>No.</th>
            <th>Cover</th>
            <th>Judul</th>
            <th>Tahun</th>
            <th>Harga</th>
            <th>Action</th>
          </thead>
          <tbody>
            <?php
              $premi = $mysqli->query("SELECT * FROM film where STATUS_FILM = '1'");
                  if($premi->num_rows > 0){
                      $x=1;
                      while($row = $premi->fetch_array()){
              			$id_flm = $row["ID_FILM"];
                        $cover = $row["COVER"];
                        $judul = $row["JUDUL_FILM"];
              			$tahun = $row["TAHUN_FILM"];
              			$harga = $row["HARGA_FILM"];
                          
                          echo '<tr>
                                  <td>'.$x.'</td>
                                  <td><img src="'.$cover.'" width="15%"></td>
                                  <td>'.$judul.'</td>
                                  <td>'.$tahun.'</td>
              					<td>'.$harga.'</td>
              					<td><a href="form_ubah.php?id='.$id_flm.'"<i class="fa fa-pencil-square-o"></i> | <a href="delete.php?id='.$id_flm.'" target="_blank"><i class="fa fa-window-close"></i></a></td>
                              </tr>';
                          
                          $x++;
                      }
                  } else {
                      echo '<tr>
                                  <td>No data</td>
                                  <td>No data</td>
                                  <td>No data</td>
                                  <td>No data</td>
                              </tr>';
                  }
              ?>
          </tbody>
        </table>
      </div>
    </div>
    <center>Copyright &copy; 2018 Twitter Trending Indonesia</center>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
