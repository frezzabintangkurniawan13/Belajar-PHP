<?php

if(isset($_POST['nama'], $_POST['alamat'])){
    $name = $_POST['nama'];
    $adress = $_POST['alamat']; 

echo "Nama :{$name}";
echo "<br>";
echo "Alamat :{$adress}";

}

?>
