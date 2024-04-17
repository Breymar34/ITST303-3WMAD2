<?php
include './vendor/autoload.php';

use Fieg\Bayes\Classifier;
use Fieg\Bayes\Tokenizer\WhitespaceAndPunctuationTokenizer;

$tokenizer = new WhitespaceAndPunctuationTokenizer();
$classifier = new Classifier($tokenizer);

$classifier->train('Land', 'Horse');
$classifier->train('Land', 'Dog');
$classifier->train('Land', 'Cat');
$classifier->train('Land', 'Tiger Commando');
$classifier->train('Land', 'Elephant');
$classifier->train('Land', 'Tiger');
$classifier->train('Land', 'Dragon');
$classifier->train('Land', 'Sheep');
$classifier->train('Sea', 'Shark');
$classifier->train('Sea', 'Megalondon');
$classifier->train('Sea', 'Whale');
$classifier->train('Sea', 'Lapras');
$classifier->train('Air', 'Eagle');
$classifier->train('Air', 'Falcon');
$classifier->train('Air', 'Maya');
$classifier->train('Air', 'Pterodactyl');

$animals = "The Maya is Swimming in the Air";

$result = $classifier->classify($animals);

print $animals."<hr>";
print "AIR : ".$result['Air']." SEA : ".$result['Sea']." LAND :".$result['Land'];

