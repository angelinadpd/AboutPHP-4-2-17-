<!DOCTYPE html>
<head>
<title>Belajar cara menampilkan Boolean PHP</title>
</head>
<body>

<?php
$benar=true;
$salah=false;
 
echo "benar = $benar, salah = $salah";
// hasil output: benar = 1, salah =
?>

<?php
//Konveksi nilai boolean
   $x = FALSE; // false
   $x = ""; // false
   $x = " "; // true
   $x = 1; // true
   $x = -2; // true
   $x = "belajar"; // true
   $x = 3.14; // true
   $x = array(); // false
   $x = array(12); // true
   $x = "false"; // true
?>

</body>
</html>