<?php
$khai_vi = $_POST['mon_khai_vi'];
echo "- Mon Khai Vi: "."<br>";
foreach ($khai_vi as $x){
    echo $x."<br>";
}
$chinh = $_POST['mon_chinh'];
echo "- Mon Chinh: "."<br>";
foreach ($chinh as $y){
    echo $y."<br>";
}
$trang_mieng = $_POST['mon_trang_mieng'];
echo "- Mon Trang Mieng: "."<br>";
foreach ($trang_mieng as $z){
    echo $z."<br>";
}
?>

