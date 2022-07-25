<?php

// STRING XML
$string = '<?xml version="1.0" encoding="UTF-8"?>
<root>
  <user>
    <id>01</id>
    <email>contato.herculanosilva@gmail.com</email>
    <name><![CDATA[Laécio Herculano]]></name>
  </user>
</root>';

// CARREGA O XML COM BASE NA STRING
// $xml = simplexml_load_string($string);

// CARREGA O XML COM BASE NO ARQUIVO
$xml = simplexml_load_file(__DIR__.'/xml/arquivo.xml');

// DADOS DO XML
echo 'ID: '.$xml->user->id."\n";
echo 'Nome: '.$xml->user->name."\n";
echo 'E-mail: '.$xml->user->email."\n";