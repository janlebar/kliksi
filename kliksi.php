<?php
$dom = new DOMDocument;
$dom->load('file.xml');
$books = $dom->getElementsByTagName('book');
foreach ($books as $book) {
  echo $book->getAttribute('id');
}

$xml = simplexml_load_string($xmlCode, 'SimpleXMLElement', LIBXML_NOCDATA);
$data = array();
$data['RIZDDZStevilka1'] = (string) $xml->Izvajalec->RIZDDZStevilka;
$data['RIZDDZStevilka2'] = (string) $xml->Zdravnik->RIZDDZStevilka;
$data['Ime1'] = (string) $xml->Zdravnik->ImeZdravnika->Ime1;
$data['Priimek1'] = (string) $xml->Zdravnik->ImeZdravnika->Priimek1;


$xml = simplexml_load_string($xml);
$arr = array();
foreach($xml->Podatki->Zdravnik->ImeZdravnika as $value)
{
    $arr[] = (string)$value->Priimek1;
    $arr[] = (string)$value->Ime1;
    $arr[] = (string)$value->Ime2;
}
print_r($arr);
?>