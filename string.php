<?php

$simpleStrig="this is Faysal";//string declaring and assigning.
echo strlen($simpleStrig);//use "strlen()" for check how many character in the string.
echo("\n");
echo str_word_count($simpleStrig);//use "str_word_count()" for count how many word in the string
echo("\n");
echo strrev($simpleStrig);//use "strrev()" for reverse a string.
echo("\n");
echo strpos($simpleStrig,"Faysal");//use "strpos()" searches for a specific text position within a string.
echo("\n");
echo str_replace("Faysal","Ismail",$simpleStrig);//use for replacement text.
?>