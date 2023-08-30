<?php
$str="this this this ";
echo $str."<br>";
$len=strlen($str);
echo "the length of string is: ".$len. ".thank you <br>";
echo "the total no. of words : ".str_word_count($str). ".thank you <br>";
// echo $len;
echo "the reverse string is ".strrev($str). ".thank you <br>";
echo "the position of i is ".strpos($str, 'i'). ".thank you <br>";
echo "the position of i is ".str_replace('is','at',$str ). ".thank you <br>";
?>