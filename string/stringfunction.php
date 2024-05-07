<?php
$text="we are learn php with me ";
echo strlen($text);
echo ("<hr>");
echo substr($text,15,3);
echo ("<hr>");
echo str_replace("php","js",$text);
echo ("<hr>");
echo strpos($text,"me",10);
echo ("<hr>");
echo strtoupper($text);
echo ("<hr>");
echo strtolower($text);
echo ("<hr>");
echo str_word_count($text);
echo ("<hr>");
echo str_repeat($text,3);
echo ("<hr>");
echo str_shuffle($text);
echo ("<hr>");
echo strrev("walid");
echo ("<hr>");
echo empty($text);
?>