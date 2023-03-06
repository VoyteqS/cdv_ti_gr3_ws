<?php
    $firstname = "Janusz";
    $lastname = "Nowak";
    echo "Imię i nazwisko: $firstname $lastname<br>";
    echo 'Imię i nazwisko: $firstname $lastname<br>';
    
//heredoc
    echo <<< DATA
    Imię: $firstname<br>
    Nazwisko: $lastname<br>
DATA;

$data = <<< DATA
    Imię: $firstname<br>
    Nazwisko: $lastname<br>
DATA;

    echo $data;

//nowdoc
echo <<< 'DATA'
    Imię: $firstname<br>
    Nazwisko: $lastname<br>
DATA;

$bin = 001011;
echo $bin;

$oct = 011;
echo $oct;

$hex = 0x41;
echo $hex;
?>