<?php

function textExploder($text)
{
    $del = [" ","\n","\r","'",'"',",","!","/","?",".",";",":","-"];
    $text = str_replace($del, $del[0], $text);
    $returnArry = explode($del[0], $text);
    return returnArry;

 
}

function poem($seed, $conn)
{

}
?>

