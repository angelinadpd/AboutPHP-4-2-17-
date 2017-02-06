<!DOCTYPE html>
<head>
<title>Belajar cara menampilkan Integer PHP</title>
</head>
<body>

<?php
$a = "a";
$b = "tipe data string biasa" ;
$c = "t1p3 d4t4 str1n9?!";
?>


<?php
//menggunakan single quoted
$string1='Ini adalah string sederhana';
 
$string2='Ini adalah string
yang bisa memiliki beberapa
baris';
 
$string3='Dia berkata: "I\'ll be back"';
 
$string4='Anda telah berhasil menghapus C:\\xampp\\htdoc';
 
$string5='Kalimat ini tidak akan pindah ke: \n baris baru';
 
$string6='Variabel juga tidak otomatis ditampilkan $string1 dan $string3';
 
echo $string1; echo "<br>";
echo $string2; echo "<br>";
echo $string3; echo "<br>";
echo $string4; echo "<br>";
echo $string5; echo "<br>";
echo $string6;
?>

//menggunakan double quoted
<?php
//menggunakan double quoted
$string1="Ini adalah string sederhana";
 
$string2="Ini adalah string
yang bisa memiliki beberapa
baris";
 
$string3="Dia berkata: \"I'll be back\"";
 
$string4="Anda telah berhasil menghapus C:\\xampp\\htdoc";
 
$string5="Kalimat ini akan akan pindah ke: \n baris baru";
 
$string6="Variabel akan otomatis ditampilkan: $string1 dan $string3";
 
echo $string1; echo "<br \>";
echo $string2; echo "<br \>";
echo $string3; echo "<br \>";
echo $string4; echo "<br \>";
echo $string5; echo "<br \>";
echo $string6;
?>


<?php
//menggunakan heredoc
$Jum=4;
$string1 = <<<end
Saya sedang mempelajari Materi PHP <br />
Kali ini membahas tentang tipe Data. \n Tipe data kali ini adalah String</br>
Dengan banyak cara penulisan adalah $Jum :)
end;
 
echo $string1;
?>


<?php
//menggunakan nowdoc
$Jum=4;
$string1 = <<< 'end'
Saya sedang mempelajari Materi PHP <br />
Kali ini membahas tentang tipe Data. \n Tipe data kali ini adalah String</br>
Dengan banyak cara penulisan adalah $Jum :)
end;
 
echo $string1;
?>




</body>
</html>