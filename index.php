<html>
<head>
<title> Halaman Utama </title>
</head>
<body>
<?php include 'koneksi.php';?>
<?php
echo $code;
?>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111111;
}
</style>
</head>
<body>
<h1> Mahasiswa Unsurya </h1>
<p>Sedang belajar php</p>
<ul>
<li><a href="/yanni2/ListMahasiswaTable.php"> Table </a> </li>
<li><a href="/yanni2/ListMahasiswaOrderList.php"> List Order </a> </li>
<li><a href="/yanni2/ListMahasiswaSelectData.php">Select Data </a> </li>
</ul>
</body>
</html>
