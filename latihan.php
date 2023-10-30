<?php

$siswa = [
  [ 
    "nis" => "0225744", 
    "nama" => "abia", 
    "kelas" => "11 PPLG 4", 
    "no_telp" => "0835386755" ,
    "img" => "abia.jpeg"
  ],

  [
    "nis" => "022757540", 
    "nama" => "agisna", 
    "kelas" => "11 PPLG 5", 
    "no_telp" =>  "08353543586" ,
    "img" => "agisna.jpeg"
  ],
  [
    "nis" => "02275675740", 
    "nama" => "amanda", 
    "kelas" => "11 PPLG 6", 
    "no_telp" =>  "0835536426286",
    "img" => "amanda.jpeg"
  ],
  [
    "nis" => "02275534220", 
    "nama" => "rehan", 
    "kelas" => "11 PPLG 7", 
    "no_telp" =>  "0835503286" ,
    "img" => "rehan.jpeg"
  ],
  [
    "nis" => "022750694", 
    "nama" => "ripaldi", 
    "kelas" => "11 PPLG 6", 
    "no_telp" =>  "0835503486",
     "img" => "ripaldi.jpeg"
  ],
];

// $koneksi = mysqli_connect("localhost","root","","siswa11pplg2");


// $simpan = mysqli_query($koneksi,"")

// var_dump($siswa);

// echo "<br>";

// echo $siswa[0]["nama"];







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array asosiative</title>
    <style>
      ul a{
        text-decoration: none;
        color: black;
      }
    </style>
</head>
<body>
    <h1>Data Data Siswa</h1>

    <ul>
        <?php foreach($siswa as $students) : ?>
    
            <li>
            <a href="latihan2.php?nis=<?= $students["nis"]; ?>&nama=<?= $students["nama"]; ?>&kelas=<?= $students["kelas"]; ?>&no_telp=<?= $students["no_telp"]; ?>&img=<?= $students["img"];?>"><?= $students["nama"]; ?></a>              
            </li>
      
       <?php endforeach; ?>
           <!-- <php } ?> -->
    </ul>


</body>
</html>