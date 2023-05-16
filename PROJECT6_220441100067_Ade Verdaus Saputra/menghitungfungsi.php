<!DOCTYPE html>
<html>
<head>
	<title>Menu Perhitungan</title>
    <link rel="stylesheet" href="fungsi.css">
</head>
<body>
	<h2>Menu Perhitungan</h2>
	<form action="" method="post">
		<p>Masukkan Angka: <input type="number" name="angka"></p>
		<p>
			<label for="menu">Pilih Menu:</label>
			<select name="menu" id="menu">
				<option value="faktorial">Faktorial</option>
				<option value="fibonacci">Fibonacci</option>
				<option value="konversi_suhu">Konversi Suhu</option>
			</select>
		</p>
		<div id="konversi_suhu">
			<label for="konversi">Pilih Konversi Suhu:</label>
			<select name="konversi" id="konversi">
				<option value="">Pilih Konversi Suhu</option>
				<option value="c_to_f">Celsius ke Fahrenheit</option>
				<option value="f_to_c">Fahrenheit ke Celsius</option>
				<option value="c_to_r">Celsius ke Reamur</option>
				<option value="r_to_c">Reamur ke Celsius</option>
				<option value="c_to_k">Celsius ke Kelvin</option>
				<option value="k_to_c">Kelvin ke Celsius</option>
			</select>
		</div>
		<button type="submit" name="hitung">Hitung</button>
	</form>
	<?php
		if(isset($_POST['hitung'])) {
			$angka = $_POST['angka'];
			$menu = $_POST['menu'];

			switch ($menu) {
				case 'faktorial':
					$hasil = 1;
					for ($i=1; $i<=$angka; $i++) {
						$hasil *= $i;
					}
					echo "Faktorial dari $angka adalah $hasil";
					break;
				case 'fibonacci':
					$a = 0;
					$b = 1;
					$c = 0;
					echo "Deret fibonacci dari $angka angka pertama: ";
					for ($i=0; $i<$angka; $i++) {
						echo "$a ";
						$c = $a + $b;
						$a = $b;
						$b = $c;
					}
					break;
				
                 case 'konversi_suhu':
                    $konversi = $_POST['konversi'];
                    if (!empty($konversi)) {
                        switch ($konversi) {
                             case 'c_to_f':
                                $hasil = ($angka * 9/5) + 32;
                                echo "$angka derajat Celsius sama dengan $hasil derajat Fahrenheit";
                                break;
                            case 'f_to_c':
                                $hasil = ($angka - 32) * 5/9;
                                echo "$angka derajat Fahrenheit sama dengan $hasil derajat Celsius";
                                break;
                            case 'c_to_r':
                                $hasil = $angka * 4/5;
                                echo "$angka derajat Celsius sama dengan $hasil derajat Reamur";
                                break;
                            case 'r_to_c':
                                $hasil = $angka * 5/4;
                                echo "$angka derajat Reamur sama dengan $hasil derajat Celsius";
                                break;
                            case 'c_to_k':
                                $hasil = $angka + 273.15;
                                echo "$angka derajat Celsius sama dengan $hasil derajat Kelvin";
                                break;
                            case 'k_to_c':
                                $hasil = $angka - 273.15;
                                echo "$angka derajat Kelvin sama dengan $hasil derajat Celsius";
                                break;
                            default:
                                echo "Pilih konversi suhu terlebih dahulu.";
                                break;
                        }
                    } else {
                        echo "Pilih konversi suhu terlebih dahulu.";
                    }
                    break;
                }
            }                  
            
                                