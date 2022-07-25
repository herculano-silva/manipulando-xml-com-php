<?php

// INSTÂNCIA DO DOCUMENTO
$dom = new DOMDocument('1.0','UTF-8');

// FORMATA A SAÍDA DO XML 
$dom->formatOutput = true;

// NÓ DE ID DO USUÁRIO
$idnodeValue = $dom->createTextNode(01);
$idNode = $dom->createElement('id');
$idNode->appendChild($idnodeValue);

// NÓ DE EMAIL DO USUÁRIO
$emailNodeValue = $dom->createTextNode('contato.herculanosilva@gmail.com');
$emailNode = $dom->createElement('email');
$emailNode->appendChild($emailNodeValue);

// NÓ DE NOME DO USUÁRIO 
// createTextNode pode ser quebrado se receber caracteres especiais por isso usarei o createCDATASection
$nameNodeValue = $dom->createCDATASection('Laécio Herculano');
$nameNode = $dom->createElement('name');
$nameNode->appendChild($nameNodeValue);

// NÓ DE USUÁRIO
$userNode = $dom->createElement('user');
$userNode->appendChild($idNode);
$userNode->appendChild($emailNode);
$userNode->appendChild($nameNode);

// INSTÂNCIA DO NÓ ROOT - NO PRINCIPAL
$rootNode = $dom->createElement('root');
$rootNode->appendChild($userNode);
$dom->appendChild($rootNode);


// IMPRIME O XML NA TELA
// $xml = $dom->saveXML();
// echo $xml;

// SALVA O CONTEÚDO EM UM ARQUIVO
$dom->save(__DIR__.'/xml/arquivo.xml');
