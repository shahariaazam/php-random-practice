<?php
/**
 *  @Author: G. M. Shaharia Azam
 *  @URL: http://www.shahariaazam.com
 *  @Description: Few example of PHP Data Type
 */

/*  delcare few variable to check their data type */
$intVar = 10;   //Integar variable

$floatVar = 2.49;   //Float type aka Double

$stringVar = "There are 8 data types in PHP";   // String

$arrayVar = array(
    'Boolean', 
    'Integar', 
    'Float aka Double',
    'String', 'Array',
    'Object',
    'Resource',
    'Null'
);  // Array type

$booleanVar = true; // Boolean type

// Make an empty class to check object type
class obj{

}

$objectVar = new obj();

// To check resource type
$resource = mysql_connect();

// Null value
$nullVar = null;

// output the data type of each variable
echo gettype($intVar);
echo "\n";
echo gettype($floatVar);
echo "\n";
echo  gettype($stringVar);
echo "\n";
echo gettype($arrayVar);
echo "\n";
echo gettype($booleanVar);
echo "\n";
echo gettype($objectVar);
echo "\n";
echo gettype($resource);
echo "\n";
echo gettype($nullVar);
echo "\n";