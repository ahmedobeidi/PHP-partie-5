<?php 

/* Exercise 1 */
echo "Exercise 1<br/>";

$months = [
    "janvier",
    "fevrier",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "aout",
    "septembre",
    "octobre",
    "novembre",
    "decembre"
];

print_r($months);
echo "<br/><br/>";


/* Exercise 2 */
echo "Exercise 2<br/>";
echo $months[2];
echo "<br/><br/>";


/* Exercise 3 */
echo "Exercise 3<br/>";
echo $months[5];
echo "<br/><br/>";

/* Exercise 4 */
echo "Exercise 4<br/>";
$months[7] = "août";
echo $months[7];
echo "<br/><br/>";

/* Exercise 5 */
echo "Exercise 5<br/>";
$hautsDeFrance = [
    02 => "Asine",
    59 => "Nord",
    60 => "Oise",
    62 => "Pas-de-Calais",
    80 => "Somme",
];
echo "<br/><br/>";

/* Exercise 6 */
echo "Exercise 6<br/>";
echo $hautsDeFrance[59];
echo "<br/><br/>";

/* Exercise 7 */
echo "Exercise 7<br/>";
$hautsDeFrance[51] = "Marne";
echo $hautsDeFrance[51];