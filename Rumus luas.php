<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rumus Luas</title>
  
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
  <h1>Menghitung Luas</h1>
 <p>
   <h3>Pilih salah satu untuk menghitung luas tersebut</h3>
 </p>
  <form method="post" action="Luas Segitiga.php">
    <input type="submit" value="Segitiga">
    </form> <br>
  <form method="post" action="Luas Persegi.php">
    <input type="submit" value="Persegi">
  </form> <br>
  <form method="post" action="Luas Persegi Panjang.php">
    <input type="submit" value="Persegi Panjang"> 
    </form> <br>
   <form method="post" action="Luas Lingkaran.php">
   <input type="submit" value="Lingkaran">
    </form>
</body>
</html>