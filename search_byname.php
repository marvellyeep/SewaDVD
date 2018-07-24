<?php
include 'koneksi.php';
if(isset($_GET['judul'])){
	$carijudul = $_GET['judul'];
    $premi = $mysqli->query("select * from film where JUDUL_FILM LIKE '%$carijudul%'");
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
}