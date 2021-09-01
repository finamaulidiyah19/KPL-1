<!DOCTYPE html>
<html>
  <head>
    <title>Nilai Mahasiswa</title>

    <!-- Nama : Fina Maulidiyah N
    NIM : 19051397034
    Prodi : D4 Manajemen Informatika 19A -->
    
    <style type="text/css">
    	body {
    		background : white;
    		background-repeat: no-repeat;
    	}
    	#card {
    		background : #C4FAF8;
    		border-radius: 8px;
    		box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    		height: 500px;
    		margin: 4.5rem auto 5rem auto;
    		width: 375px;
    	}
    	#card-content {
    		padding: 1px 25px;
    	}

    	#card-title {
    		font-family: cursive;
    		letter-spacing: 1px;
    		text-align: center;
    	}

    	.row {
    		margin-top: 5px;
    	}

    	label {
    		font-family: times new roman;
    	}

    </style>
  </head>
  <body>
  	<div id="card">
  		<div id="card-content">
  			<div id="card-title">
  				<h3>Hitung Nilai Mahasiswa UNESA dan Konversikan ke Huruf</h3>
  			</div>
  			<form action="" method="post">
          <div class="row">
            <label style="margin-right: 28px;">Nama Mahasiswa</label>
            <input type="text" name="nama" value="<?=isset($_POST['nama']) ? $_POST['nama'] : ''?>"/>
          </div>

          <div class="row">
            <label style="margin-right: 111px;">NIM</label>
            <input type="number" min="0" name="nim" value="<?=isset($_POST['nim']) ? $_POST['nim'] : ''?>"/>
          </div>

          <div class="row">
            <label style="margin-right: 108px;">Prodi</label>
            <input type="text" name="prodi" value="<?=isset($_POST['prodi']) ? $_POST['prodi'] : ''?>"/>
          </div>

          <div class="row">
            <label style="margin-right: 62px;">Mata Kuliah</label>
            <input type="text" name="matkul" value="<?=isset($_POST['matkul']) ? $_POST['matkul'] : ''?>"/>
          </div>

  				<div class="row">
  					<label style="margin-right: 76px;">Partisipasi</label>
  					<input type="text" name="partisipasi" value="<?=isset($_POST['partisipasi']) ? $_POST['partisipasi'] : ''?>"/>
  				</div>

  				<div class="row">
  					<label style="margin-right: 15px;">Nilai rata-rata tugas</label>
  					<input type="text" name="tugas" value="<?=isset($_POST['tugas']) ? $_POST['tugas'] : ''?>"/>
  				</div>

  				<div class="row">
  					<label style="margin-right: 76px;">Nilai UTS</label>
  					<input type="text" name="uts" value="<?=isset($_POST['uts']) ? $_POST['uts'] : ''?>"/>
  				</div>

          <div class="row">
            <label style="margin-right: 74px;">Nilai UAS</label>
            <input type="text" name="uas" value="<?=isset($_POST['uas']) ? $_POST['uas'] : ''?>"/>
          </div>

  				<div align="center" class="row" style="margin-top: 10px;">
  					<input type="submit" name="hitung" value="Submit">
  				</div>
  				<br>
  			</form>

        <?php
  			if (isset($_POST['hitung'])) {
          $nama = $_POST['nama'];
          $nim = $_POST['nim'];
          $prodi = $_POST['prodi'];
          $matkul = $_POST['matkul'];
  				$partisipasi = $_POST['partisipasi'];
  				$tugas = $_POST['tugas'];
  				$uts = $_POST['uts'];
          $uas = $_POST['uas'];

  				$nilai = 0.1*(2*$partisipasi+3*$tugas+2*$uts+3*$uas);
            
          echo "Nama Mahasiswa : $nama<br/>";
          echo "NIM : $nim<br/>";
          echo "Prodi : $prodi<br/>";
          echo "Mata Kuliah : $matkul<br/>";
          echo "Nilai Akhir Mata Kuliah $matkul : $nilai<br/>";
        }

        if (isset($_POST['hitung'])) {
          $nama = $_POST['nama'];
          $nim = $_POST['nim'];
          $prodi = $_POST['prodi'];
          $matkul = $_POST['matkul'];
          $partisipasi = $_POST['partisipasi'];
          $tugas = $_POST['tugas'];
          $uts = $_POST['uts'];
          $uas = $_POST['uas'];

          $nilai = 0.1*(2*$partisipasi+3*$tugas+2*$uts+3*$uas);

          if ($nilai >= 85) {
            echo "Predikat : A";
          }
          elseif ($nilai >= 80 and $nilai < 85) {
            echo "Predikat : A-";
          }
          elseif ($nilai >= 75 and $nilai < 80) {
            echo "Predikat : B+";
          }
          elseif ($nilai >= 70 and $nilai < 75) {
            echo "Predikat : B";
          }
          elseif ($nilai >= 65 and $nilai < 70) {
            echo "Predikat : B-";
          }
          elseif ($nilai >= 60 and $nilai < 65) {
            echo "Predikat : C+";
          }
          elseif ($nilai >= 55 and $nilai < 60) {
            echo "Predikat : C";
          }
          elseif ($nilai >= 40 and $nilai < 55) {
            echo "Predikat : D";
          }
          else {
            echo "Predikat : E";
          }
        }
        ?>

  		</div>
  	</div>
  </body>
</html>