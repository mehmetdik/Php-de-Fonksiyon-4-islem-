<head>
<title>PHP'de Fonksiyon</title>

</head>
<body>
<?php

function topla ($sayi1, $sayi2) {
$sonuc = $sayi1 + $sayi2;
return $sonuc;
}

function cikart ($sayi1, $sayi2) {
$sonuc = $sayi1 - $sayi2;
return $sonuc;
}

function carp ($sayi1, $sayi2) {
$sonuc = $sayi1 * $sayi2;
return $sonuc;
}

function bol ($sayi1, $sayi2) {
$sonuc = $sayi1 / $sayi2;
return $sonuc;
}

$sayi1 = 12;
$sayi2 = 5;

print topla($sayi1, $sayi2);
print ("<br>");
print cikart($sayi1, $sayi2);
print ("<br>");
print carp($sayi1, $sayi2);
print ("<br>");
print bol($sayi1, $sayi2);
print ("<br>");
?>
</body>
</html>
