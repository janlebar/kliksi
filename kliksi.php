<?php
$dom = new DOMDocument;
$dom->load('file.xml');
$books = $dom->getElementsByTagName('book');
foreach ($books as $book) {
  echo $book->getAttribute('id');
}



$xml = simplexml_load_string($xml);
$arr = array();
foreach($xml->Podatki->Zdravnik->ImeZdravnika as $value)
{
    $arr[] = (string)$value->Priimek1;
    $arr[] = (string)$value->Ime11;
}
print_r($arr);
?>