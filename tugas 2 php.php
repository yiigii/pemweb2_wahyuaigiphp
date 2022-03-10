<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nama_buah = ["semangka", "melon","apel","jeruk","pepaya"];
$nilai_siswa = ['nim'=>'0110219085', 'uts'=>100,'uas'=>80,'tugas'=>60];
foreach ( #nilai_siswa as $siswa => $value ) {
    echo $siswa . $value . "<br>";
}
?>  
</body>
</html>
