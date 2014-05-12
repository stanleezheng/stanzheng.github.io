<?php
//echo "foo doo<br>";
date_default_timezone_set('EST5EDT');
$my_file = 'feedback.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:'.$my_file);
$data = file_get_contents($my_file);
//print($data);
//var_dump($_POST);
if(isset($_POST["name"])){
//add the most material
$file_data = "Time: ". date("m/d/Y h:i:s a", time()) ."\nName: ".$_POST["name"] . "\n" . "Comment: ".$_POST["comment"] . "\nEmail:". " " . $_POST["email"]. "\n\n";
$file_data .= file_get_contents($my_file);
file_put_contents($my_file, $file_data);

 //mail("szheng@cs.odu.edu","New Message",$_POST["comment"],"From: $_POST['email']\n");
// $data = '\n New data line 1';
// fwrite($handle, $data);
// $new_data = "\n".'New data line 2';
// fwrite($handle, $new_data);
 }
 header('Location:contact.html?submitted');
?>
