<?php
### FOR ###
for($i=1;$i<=10;$i++){
    echo "Mahasiswa Ke-$i <br>";
}

echo "<hr>";
### WHILE ###
$awal = 1;
while($awal <= 10){
    echo "Mahasiswa Ke-$awal<br>";
    $awal++;
}

echo "<hr>";
### DO WHILE ###
$dw = 1;
do{
    echo "Mahasiswa Ke-$dw <br>";
    $dw++;
}while($dw <= 10);

?>