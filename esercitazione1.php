<?php 

//TRACCIA 1

$nome = 'Marco'; //string
$anni = 23; //number
$altezza = 1.75; //float
$is_student = true; //boolean

echo gettype ($nome) . " ";
echo gettype ($anni) . " ";
echo gettype ($altezza) . " ";
echo gettype ($is_student);

const NOME = 'Marco';
const ANNI = 23;
const ALTEZZA = 1.75;
const IS_STUDENT = true;

//TRACCIA 2

$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = 'hai';
$text7 = 'bevuto';
$text8 = 'tutto';

echo $text1 . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8;

//TRACCIA 3

$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    'oscura',
    'era',
    89,
    'mezzo',
    'cammin',
    'Nel',
    'selva',
    'la',
    'via',
    'una',
    true,
    'ritrovai',
    'per',
    'diritta',
    'di',
    ',',
    ];
    $words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
    'Virgilio',
    'smarrita',
    'ché',
    '.',
    ]
    ];

    $results = $words1[11] . " " . $words1[9]  . " " . $words1[20] . " " . $words1[10] . " " . $words1[20] . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[17] . " " . $words1[18] . " " . $words1[0] . " " . $words1[12] . " " . $words1[6] . $words1[21] . " " . $words2['elemento3'][2] . " " . $words1[13] . " " . $words1[19] . " " . $words1[14] . " " . $words1[7] . " " . $words2['elemento3'][1] . $words2['elemento3'][3];    
    echo $results;