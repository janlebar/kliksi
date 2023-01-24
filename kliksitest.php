<?php

$xml = simplexml_load_file('eBOL_redni_1002471.xml', null, LIBXML_NOCDATA);

$name = $xml->xpath("//ImeOsebe");
$name_array = array();

foreach ($name as $n) {
    $priimek1 = (string)$n->Priimek1;
    $ime1 = (string)$n->Ime1;
    array_push($name_array, array("priimek1" => $priimek1, "ime1" => $ime1));
}

print_r($name_array);

?>