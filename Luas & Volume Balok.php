<!DOCTYPE html>
<html>
  <head>
    <title>Luas dan Volume Balok</title>

    <!-- Nama : Fina Maulidiyah N
    NIM : 19051397034
    Prodi : D4 Manajemen Informatika 19A -->

    <style type="text/css">
    	body {
    		background : white;
    		background-repeat: no-repeat;
    	}
    	#card {
    		background : #FFFFCC;
    		border-radius: 8px;
    		box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
    		height: 410px;
    		margin: 6rem auto 8.1rem auto;
    		width: 375px;
    	}
    	#card-content {
    		padding: 1px 25px;
    	}

    	#card-title {
    		font-family: times new roman;
    		letter-spacing: 2px;
    		text-align: center;
    	}

    	.row {
    		margin-top: 5px;
    	}

    	label {
    		font-family: cursive;
    	}
    </style>
  </head>
  <body>
  	<div id="card">
  		<div id="card-content">
  			<div id="card-title">
  				<h2>Hitung<br>Luas & Volume Balok</h2>
  			</div>
  			<form action="" method="post">
  				<div class="row">
  					<label style="margin-right: 9px;">Masukkan panjang</label>
  					<input type="number" min="0" name="panjang" value="<?=isset($_POST['panjang']) ? $_POST['panjang'] : ''?>"/>
  				</div>

  				<div class="row">
  					<label style="margin-right: 27px;">Masukkan lebar</label>
  					<input type="number" min="0" name="lebar" value="<?=isset($_POST['lebar']) ? $_POST['lebar'] : ''?>"/>
  				</div>

  				<div class="row">
  					<label style="margin-right: 24px;">Masukkan tinggi</label>
  					<input type="number" min="0" name="tinggi" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>"/>
  				</div>

  				<div align="center" class="row" style="margin-top: 15px;">
  					<input type="submit" name="luas" value="Luas">
  					<input style="margin-left: 50px;" type="submit" name="volume" value="Volume">
  				</div>
  				<br>
  			</form>

  			<?php
  			if (isset($_POST['luas'])) {
  				$panjang = $_POST['panjang'];
  				$lebar = $_POST['lebar'];
  				$tinggi = $_POST['tinggi'];

  				$luas_balok = 2*($panjang*$lebar+$panjang*$tinggi+$lebar*$tinggi);

  				echo "Hasil Hitung<br/>";
  				echo "Luas Balok : 2 ( p x l + p x t + l x t )<br/>";
  				echo "Luas Balok : 2 ( $panjang x $lebar + $panjang x $tinggi + $lebar x $tinggi )<br/>";
  				echo "Luas Balok : $luas_balok";
  				# code...
  			} 

  			if (isset($_POST['volume'])) {
  				$panjang = $_POST['panjang'];
  				$lebar = $_POST['lebar'];
  				$tinggi = $_POST['tinggi'];

  				$volume_balok = $panjang*$lebar*$tinggi;

  				echo "Hasil Hitung<br/>";
  				echo "Volume Balok : p x l x t<br/>";
  				echo "Volume Balok : $panjang x $lebar x $tinggi<br/>";
  				echo "Volume Balok : $volume_balok";
  				# code...
  			}
  			?>
  		</div>
  	</div>
  </body>
</html>