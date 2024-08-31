<!-- <?php
print "Bonjour";
// ?> -->


<!-- excercise 1 -->
<?php
$numero = readline("Saisir un nombre  ");
if ($numero == 2) {
    print "c'est correct";
}
    else {
        print "ce n'est correct";
    }
?>


<!-- excercise 2 -->
<?php
$numero = readline("Saisir un nombre  ");
if ($numero <= 10) {
    print "« Plus grand !";
}
if ($numero >= 20) {
        print "Plus petit !";
    }
?>

<!-- excercise 3 -->
<?php
$numero = readline("Saisir un nombre");
$max = $numero + 10;
while ($numero <= $max) 
    echo $numero++;
?>

<!-- excercise 4 -->
<?php
$numero = readline("Saisir un nombre");
$max = $numero;
for ($numero = 17; $numero < $max; $numero++) 
    print "$numero";
?>

<!-- excercise 5 -->
<?php
$numero = readline("Saisir un nombre");
$num = 1;
while ($num <11)
echo $multi * $num++;
?>

<!-- excercise 6 -->
<?php 
$numero = readline("Saisir un nombre");
while ($numero == 0)
$num = $numero + ($numero-1);
$num++; 
$res = $num;
print $res;
?>
