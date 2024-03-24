<?php
for ($i=1; $i<=10000; $i++)
{
    for ($j=1; $j<=10; $j++)
    {   
        $c = $i*$j;
        if (strlen($c)<2){
            echo "[ &nbsp;&nbsp;".$i*$j." &nbsp;&nbsp;]";}
        elseif (strlen($c)==2){
            echo "[ &nbsp;".$i*$j." &nbsp;]";}
        elseif (strlen($c)==3){
            echo "[ ".$i*$j." ]";}
        else {
            echo "[".$i*$j."]";}
            
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        }
    echo "<br><br>";
}
?>