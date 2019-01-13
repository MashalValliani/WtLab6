<!Doctype html>
<html>
<head>
  <?php
  /* task 1: Write PHP code inside HTML for the following:
Create a variable $var = 'PHP Lab 6'. Put this variable into the title section, h3 tag and 
as an anchor text within an HTML document to print its value in all of them i.e. in title, 
h3 tag and anchor tag text.
Hint: Save the file with .php extension and run according to PHP basics in the browser. 
Use echo function between HTML tags to print the value of PHP variable. */ 
 $var='PHP Lab 6';
  echo "<title>$var</title>";
  echo "<h3>$var</h3>";
  echo "<a href='#'>$var</a>";
?>
</head>
<body>
<?php
	// task 2: To get the PHP version and configuration information.
  phpinfo();
  echo "</br>";
 	/* task 3: To get the name of the owner of the current PHP script, 
 	document root directory under which the current script is running 
 	and the operating system PHP is running on. */ 
  echo "current script owner: ".get_current_user();
  echo "</br>";
  echo "Document root is:";
  $rd = getenv('DOCUMENT_ROOT');
  echo $rd."\n";
  echo "</br> </br>";
  // task 4: To swap two variables and print their values before and after swapping. 
  $a=5;
  $b=10;
  echo "Before Swapping a:".$a;
  echo "</br>";
  echo "Before Swapping b:".$b;
  echo "</br>";
  $a=$a-$b;
  $b=$a+$b;
  $a=$b-$a;
  echo "After Swapping a:".$a;
  echo "</br>";
  echo "After Swapping b:".$b;
  echo "</br>";
  
/* task 5: To display the following strings:
Tomorrow I’ll learn something new.
This is a bad command: del c:\*.*\$. */

echo "<br>";
echo "Tomorrow I’ll learn something new.</br>","This is a bad command: del c:\\*.*\\\$.";
echo "<br>";
/* task 6: To test whether a number is greater than 30, 20 or 10 
using ternary operator and print the result.*/
echo "</br>";
$number=35;
$b=($number>10 ? true:false);
if($b){
	echo "greater than 10";
}
else{
	echo "not greater than 10";
}
echo "</br>";
$c=($number>20? true:false);
if($c){
	echo "greater than 20";
}
else{
	echo "not greater than 20";
}
echo "</br>";
$d=($number>30? true:false);
if($d){
	echo "greater than 30";
}
else{
	echo "not greater than 30";
} 
/* task 7: To return the following components of any url stored in a variable such as:
url: http://sw.muet.edu.pk/faculty/cvs/sample.pdf   
Scheme : http
Host : www.sw.muet.edu.pk
Path : /faculty/cvs/sample.pdf */

echo "</br>";
echo "</br>";
$url="http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
echo "url= http://sw.muet.edu.pk/faculty/cvs/sample.pdf";
echo "</br>";
//Substring Part One Scheme
$substring_h='h';
$substring_p='p';
$index_of_h=stripos($url,$substring_h);
$index_of_p=stripos($url, $substring_p);
$substring_part_one=substr($url, $index_of_h,$index_of_p+1);
if($substring_part_one=='http'){
  echo "Scheme:".$substring_part_one."</br>";
}
//Substring Part two Host
$substring_s='s';
$substring_k='k';
$first_index_of_s=stripos($url,$substring_s);
$first_index_of_k=stripos($url, $substring_k);
$substring_part_two=substr($url, $first_index_of_s,$first_index_of_k-6);
if($substring_part_two=='sw.muet.edu.pk'){
  echo "Host:www.".$substring_part_two."</br>";
}
//Substring Part three Path
$substring_f='f';
$index_of_slash=$first_index_of_k+1;
$last_index_of_f=strrpos($url, $substring_f);
$substring_part_three=substr($url,$index_of_slash,$last_index_of_f);
if($substring_part_three=='/faculty/cvs/sample.pdf'){
  echo "Path:".$substring_part_three;
}
echo "</br>";
  ?>
</body>
</html>