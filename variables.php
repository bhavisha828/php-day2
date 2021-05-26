<?php
//variable

$a = 20;
$b = 40;
//method 1
echo "A value is ".$a;
echo "<br/>B value is ".$b;
//method 2
echo "<br/>A value is ".$a."<br/>B value is ".$b;
//method 3
echo "<br/>A value is $a<br/>B value is $b";
//method 4 single quote will consider variables as string 
echo '<br/>A value is $a<br/>B value is $b';
//method 5
echo "<br/>A value is $a<br/>B value is $b sum is".($a+$b);
//method 6
echo "<br/>A value is $a<br/>B value is $b substraction is".($a-$b);
//method 7
echo "<br/>A value is $a<br/>B value is $b modulo is".($a%$b);
//method 8
echo "<br/>A value is $a<br/>B value is $b multiple is".($a*$b);
?>