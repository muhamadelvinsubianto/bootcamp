 <?php

$angka=array(1,2,3,4,5,6,7,8,9,10);

for($i=0; $i < count($angka); $i++){
      echo $angka[$i];
      $jumlah=$angka[$i]+$jumlah;
}
echo "</br> jumlah : ".$jumlah;
$rata2=$jumlah/count($angka);
echo "</br> Rata-rata : ".$rata2;

?>