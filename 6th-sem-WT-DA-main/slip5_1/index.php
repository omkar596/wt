<?php 

$str =<<<XML
       <?xml version="1.0" encoding="UTF-8"?>
<items>
    <item>
        <name>Shirt</name>
        <rate>150</rate>
        <qty>15</qty>
    </item>
    <item>
        <name>PC</name>
        <rate>150000</rate>
        <qty>5</qty>
    </item>
    <item>
        <name>Mobile</name>
        <rate>40000</rate>
        <qty>6</qty>
    </item>
    <item>
        <name>Watch</name>
        <rate>4200</rate>
        <qty>7</qty>
    </item>
    <item>
        <name>Shoes</name>
        <rate>1500</rate>
        <qty>4</qty>
    </item>
</items>
            
XML;


$fname = "./ Item.xml";
$fp = fopen($fname , "w+");
fwrite($fp , $str);
fclose($fp);

echo 'Created filename is : '.$fname;
