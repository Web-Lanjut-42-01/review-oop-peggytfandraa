<?php 
class berat{

	function hitung($bmi, $jk){
		if ($jk=="Laki-laki") {
			if ($bmi<17) {
				echo $bmi."&nbsp Under Weight/Kurus";
			} elseif ($bmi>=17 && $bmi<=25) {
				echo $bmi."&nbsp Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi."&nbsp Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi."&nbsp Obesitas";
			}
		} elseif ($jk=="Perempuan") {
			if ($bmi<18) {
				echo $bmi."&nbsp Under Weight/Kurus";
			} elseif ($bmi>=18 && $bmi<=25) {
				echo $bmi."&nbsp Normal Weight/Normal";
			} elseif ($bmi>25 && $bmi<=27) {
				echo $bmi."&nbsp Over Weight/Kegemukan";
			} elseif ($bmi>27) {
				echo $bmi."&nbsp Obesitas";
			}
		}
	}

}
$a = new berat(); 
if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$bb= $_POST['beratbadan'];
	$tb = $_POST['tinggibadan'];
	$jk = $_POST['jk'];
	$bmi = $bb/($tb*$tb/10000);
	$a->hitung($bmi, $jk);
}
 ?>