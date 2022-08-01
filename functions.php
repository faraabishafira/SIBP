<?php

$cont = mysqli_connect("localhost", "root", "", "sibp");

function query($query)
{
    global $cont;
    $hasil = mysqli_query($cont, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($hasil)) {
         $rows[] = $row;
}
return $rows;
}