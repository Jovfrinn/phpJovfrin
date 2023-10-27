<?php
$koneksi = mysqli_connect('localhost','root','','siswa11pplg2');

$result = mysqli_query($koneksi,"SELECT * FROM siswa");

//untuk mengambil dari kotak besar (fetch)
// $swa = mysqli_fetch_row($result);
// $swa = mysqli_fetch_array($result);
// $swa = mysqli_fetch_object($result);

// var_dump($swa);











?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul li {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <ul>
    <?php $no = 1; ?>
       <?php while($swa = mysqli_fetch_assoc($result)){  ?>
              <li>
                <h3> No: <?= $no++; ?></h3>
               <h3> Nis: <?php echo $swa["nis"];  ?></h3>
               <h3> Nama: <?php echo $swa["nama"];  ?></h3>
               <h3> Kelas: <?php echo $swa["kelas"];  ?></h3>
               <h3> No Telp: <?php echo $swa["noHP"];  ?></h3>
             
     
              
              </li>


    <?php } ?>
    </ul>


    <a href="latihan.php">Kembali</a>




























    
</body>
</html>