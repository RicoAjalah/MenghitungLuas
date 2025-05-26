<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Luas Persegi</title>
  
  <style>
  html, body {
  margin: 0;         /* Menghilangkan margin default browser */
  padding: 0;        /* Menghilangkan padding default browser */
  width: 100%;       /* Memastikan lebar 100% */
  height: 100%;      /* Memastikan tinggi 100% */
  overflow-x: hidden; /* Mencegah scroll horizontal jika ada elemen melebihi lebar */
  box-sizing: border-box;
}

body {
  background-image: url('Kalkulator2.jpg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover; /* Properti kunci untuk full cover di berbagai ukuran */
  background-attachment: fixed; /* (Opsional) Tetap di tempat saat di-scroll */
  /* Tambahan untuk memastikan background memenuhi seluruh area */
  min-height: 100vh; /* Menggunakan viewport height untuk memastikan minimal 100% tinggi layar */
  /* Jika konten lebih panjang dari layar, body akan otomatis memanjang */
  
  color: white;
  text-align: center;
  font-weight: bold;
}
  
  img{
    width: 10vw;
    position: absolute;
    left: 5px;
    top: 5px;
    width: 20px;
    display: flex;
  }
  </style>
  
</head>
<body>
    <img src="SMK2-Logo.png">
  <center><h2>Menghitung Luas Persegi</h2></center>
  
  <form method="post">
    S <input type="number" name="Sisi" id="S" required> <br> <br>
    <input type="submit" name="Hitung" value="Hitung">
  </form>
  <form method="post">
    <input type="submit" name="Clear" value="Clear">
  </form> <br>
  
 <?php
 if(isset($_POST["Hitung"]) ) {
  $S = $_POST["Sisi"];
  $Luas = $S*$S;
  
  echo("Sisi= $S cm <br>");
  echo("Rumus= S*S <br>");
  echo("Luas= $Luas cm&sup2");
 }
  ?>
  <br> <br>
  <form method="post" action="Rumus luas.php">
  <input type="submit" value="Kembali">
  </form>
  
</body>
</html>